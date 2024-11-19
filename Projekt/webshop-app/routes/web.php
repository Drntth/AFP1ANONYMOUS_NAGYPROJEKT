<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdmin;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    $products = Product::all();
    return view('welcome' , ['products' => $products]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', function () {
    $products = Product::all();
    return view('products.products' , ['products' => $products]);
});
Route::get('/products/{id}', [ProductController::class, 'single'])->name('product.single');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', CheckAdmin::class])->group(function () {
    Route::get('/dashboard/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/dashboard/product/add', [ProductController::class, 'add'])->name('product.add');
    Route::post('/dashboard/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/dashboard/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/dashboard/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/dashboard/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/dashboard/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/dashboard/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::delete('/dashboard/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/dashboard/users/{id}/role', [UserController::class, 'updateRole'])->name('users.updateRole');
});



Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');





require __DIR__.'/auth.php';
