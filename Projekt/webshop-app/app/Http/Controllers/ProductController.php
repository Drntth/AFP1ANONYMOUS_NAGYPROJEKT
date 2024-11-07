<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]); //itt lehet nem kell az s betű // de kellett 
        
    }

    public function add()
    {
        return view('products.add');
    }
    public function single($id)
    {
        $product = Product::findOrFail($id);
        return view('products.single',['product' => $product]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|decimal:0,2',
            'category_id' => 'required|numeric',
            'image' => 'required',
            'stock' => 'required|numeric',
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));

    }

    public function edit(Product $product) 
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request) 
    {
        $data = $request->validate([
           'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|decimal:0,2',
            'category_id' => 'required|numeric',
            'image' => 'required',
            'stock' => 'required|numeric', 
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully!');
    }

    public function destroy(Product $product) 
    {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully!');
    }
    
}
