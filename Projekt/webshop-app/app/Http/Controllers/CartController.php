<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        return view('cart.index', compact('cartItems'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->product_id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);
        $price = ($product->stock < 4 && $product->stock > 0) ? $product->sale_price : $product->price;
        $cart[$product->id] = [
            'name' => $product->name,
            'quantity' => $cart[$product->id]['quantity'] ?? 1,
            'price' => $price,
            'image' => $product->image,
        ];

        session()->put('cart', $cart);
        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart');
        if (isset($cart[$request->product_id])) {

            $product = Product::find($request->product_id);
            $productStock = $product->stock;
            $requestedQuantity = max(1, min($request->quantity, $productStock));

            $price = ($product->stock <= 3 && $product->stock > 0) ? $product->sale_price : $product->price;

            $cart[$request->product_id]['quantity'] = $requestedQuantity;
            $cart[$request->product_id]['price'] = $price * $requestedQuantity;

            session()->put('cart', $cart);
            return redirect()->route('cart.index')->with('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
            return redirect()->route('cart.index')->with('success', 'Product removed from cart');
        }
    }
}
