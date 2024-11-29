<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');

        if (!$cart || empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        return view('checkout.index', compact('cart'));
    }
    public function showShippingPage()
    {
        $cart = session()->get('cart');
        if (!$cart || empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        return view('checkout.shipping');
    }


    public function storeShipping(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:15',
            'shipping_method' => 'required|string'
        ]);

        $cart = session()->get('cart');
        if (!$cart || empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        $basePrice = array_sum(array_column($cart, 'price'));

        $shippingCost = 0;
        switch ($request->shipping_method) {
            case 'standard':
             $shippingCost = 5.00;
                break;
            case 'express':
                $shippingCost = 10.00;
                break;
            case 'next_day':
                $shippingCost = 20.00;
             break;
        }

        $totalPrice = $basePrice + $shippingCost;

        session()->put('shipping_info', array_merge($request->all(), ['shipping_cost' => $shippingCost]));


        $order = Order::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'total_price' => $totalPrice,
            'payment_method' => null,  // Payment method will be set later THERE IS NO PAYMENT METHOD AT ALL IN DATABASE
            'shipping_method' => $request->shipping_method,
        ]);

        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }
        session()->put('order_id', $order->id);

        return redirect()->route('checkout.payment');
    }

    public function showPaymentPage()
    {
        $shippingInfo = session('shipping_info');
        $cart = session('cart');

        $orderId = session('order_id');
        if (!$orderId) {
            return redirect()->route('checkout.index')->with('error', 'Order not found.');
        }

        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('checkout.index')->with('error', 'Order not found.');
        }

        return view('checkout.payment', compact('shippingInfo', 'cart', 'order'));
    }


    public function storePayment(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string|in:credit_card,cash_on_delivery',
        ]);

        $orderId = session('order_id');
        if (!$orderId) {
            return redirect()->route('checkout.index')->with('error', 'Order not found.');
        }

        $order = Order::find($orderId);
        if (!$order) {
            return redirect()->route('checkout.index')->with('error', 'Order not found.');
        }

        $order->update([
            'payment_method' => $request->payment_method,
        ]);

        session()->forget(['cart', 'shipping_info', 'order_id']);

        return redirect()->route('checkout.order.completed')->with('success', 'Payment successful!');
    }



    public function orderCompleted()
    {
        return view('checkout.order.completed');
    }

    public function processPayment()
    {

        return view('checkout.payment');
    }

    public function handlePayment(Request $request)
    {

        $order = Order::latest()->first();

        if (!$order) {
            return redirect()->route('checkout.index')->with('error', 'No order found to process payment.');
        }

        $order->update(['status' => 'paid']);

        session()->forget('cart');
        session()->forget('shipping_info');

        return redirect()->route('checkout.index')->with('success', 'Payment successful. Your order has been placed!');
    }

}
