<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

//Route::resource('products', ProductController::class);



require __DIR__.'/auth.php';
