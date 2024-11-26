<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Session;


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

        session()->put('shipping_info', $request->all());
        //dd(session()->all());

        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
            'total_price' => array_sum(array_column($cart, 'price')),
            'payment_method' => null,  // Payment method will be set later THERE IS NO PAYMENT METHOD AT ALL IN DATABASE
        ]);

        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,  // Associate the order ID
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

        $shippingInfo = session('shipping_info');
        $cart = session()->get('cart');
        if (!$cart || empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        $order = Order::create([
            'name' => $shippingInfo['name'],
            'email' => $shippingInfo['email'],
            'address' => $shippingInfo['address'],
            'city' => $shippingInfo['city'],
            'postal_code' => $shippingInfo['postal_code'],
            'phone_number' => $shippingInfo['phone_number'],
            'total_price' => array_sum(array_column($cart, 'price')),
            'payment_method' => $request->payment_method,
        ]);

        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        session()->forget(['cart', 'shipping_info']);

        return redirect()->route('checkout.order.completed');
    }


    public function orderCompleted()
    {
        return view('checkout.order.completed');
    }

    public function processPayment()
    {
        // Display a page to enter credit card details (this would be your payment.blade.php)
        return view('checkout.payment');
    }

    public function handlePayment(Request $request)
    {
        // Process the payment (this might be an external payment gateway API call)
        // You could check for successful payment here, update the order status, etc.

        // For simplicity, let's assume payment is successful.
        // Update the order as paid:
        $order = Order::latest()->first(); // Retrieve the most recent order

        if (!$order) {
            return redirect()->route('checkout.index')->with('error', 'No order found to process payment.');
        }

        $order->update(['status' => 'paid']);

        // Clear the session or any remaining cart or payment data
        session()->forget('cart');
        session()->forget('shipping_info');

        // Redirect to the order confirmation page
        return redirect()->route('checkout.order.completed')->with('success', 'Payment successful. Your order has been placed!');
    }

}
