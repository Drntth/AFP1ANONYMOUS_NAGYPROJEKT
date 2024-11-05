<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index'); //itt lehet nem kell az s betű
    }

    public function add()
    {
        return view('products.add');
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
}