<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Enums\category_id_enum;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(Request $request)
{
    $category = $request->get('category');
    $sort = $request->get('sort', 'name_asc');
    $perPage = $request->get('per_page', 'all');

    $query = Product::query();
    if ($category) {
        $query->where('category_id', $category);
    }

    $query->sortBy($sort);

    if ($perPage === 'all') {
        $products = $query->get(); // Összes termék
    } else {
        $perPage = (int) $perPage; // Konvertáljuk biztosan számmá
        $products = $query->paginate($perPage)->appends($request->all());
    }

    $categories = category_id_enum::cases();

    return view('products.index', [
        'products' => $products,
        'categories' => $categories,
        'sort' => $sort,
        'perPage' => $perPage,
        'selectedCategory' => $category,
    ]);
}

    public function showProducts(Request $request)
    {
        $category = $request->get('category');
        $sort = $request->get('sort', 'name_asc');
        $perPage = $request->get('per_page', 'all');

        $query = Product::query();
        if ($category) {
            $query->where('category_id', $category);
        }

        $query->sortBy($sort);

        if ($perPage === 'all') {
            $products = $query->get();
        } else {
            $products = $query->paginate($perPage)->appends($request->all());
        }
        $categories = category_id_enum::cases();

        return view('products.products', [
            'products' => $products,
            'categories' => $categories,
            'sort' => $sort,
            'perPage' => $perPage,
            'selectedCategory' => $category,
        ]);
    }

    public function add()
    {
        $category_id = category_id_enum::cases();
        return view('products.add', compact('category_id'));
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
            'description' => 'required',
            'price' => 'required|decimal:0,2|min:0',
            'sale_price' => 'required|decimal:0,2|min:0',
            'category_id' => ['required', Rule::in(array_column(category_id_enum::cases(), 'value'))],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'stock' => 'required|numeric|min:0',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data['image'] = 'images/' . $imageName;

        $newProduct = Product::create($data);
        return redirect(route('product.index'));

    }

    public function edit(Product $product)
    {
        $category_id = category_id_enum::cases();
        return view('products.edit', [
            'product' => $product,
            'category_id' => $category_id,
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
           'name' => 'required',
            'description' => 'required',
            'price' => 'required|decimal:0,2|min:0',
            'sale_price' => 'required|decimal:0,2|min:0',
            'category_id' => ['required', Rule::in(array_column(category_id_enum::cases(), 'value'))],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'stock' => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('image')) {
            if (file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        } else {
            $data['image'] = $product->image;
        }

        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully!');
    }

    public function destroy(Product $product)
    {
        $imagePath = public_path($product->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully!');
    }

}
