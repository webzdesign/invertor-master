<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('product-detail/{id}', [HomeController::class, 'productDetail'])->name('productDetail');
Route::post('/cart/add', [HomeController::class, 'addToCart'])->name('cart.add');
