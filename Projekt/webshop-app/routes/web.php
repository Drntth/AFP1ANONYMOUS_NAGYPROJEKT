<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckAdmin;
use App\Models\Product;


Route::get('/', function () {
    $products = Product::all();
    return view('welcome' , ['products' => $products]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware([CheckAdmin::class])->group(function () {
    Route::get('/dashboard/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/dashboard/product/add', [ProductController::class, 'add'])->name('product.add');
    Route::post('/dashboard/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/dashboard/product/{id}', [ProductController::class, 'single'])->name('product.single');
    Route::get('/dashboard/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/dashboard/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/dashboard/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

});

require __DIR__.'/auth.php';
