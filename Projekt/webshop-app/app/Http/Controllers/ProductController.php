<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
