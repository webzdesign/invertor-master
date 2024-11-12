<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('shop', [HomeController::class, 'shop'])->name('shop');
Route::get('shop-product/{slug}', [HomeController::class, 'productDetail'])->name('productDetail');
Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::post('cart/add', [HomeController::class, 'addToCart'])->name('cart.add');
Route::post('cart/sync', [HomeController::class, 'cartSync'])->name('cart.sync');
Route::post('cart/remove', [HomeController::class, 'cartRemove'])->name('cart.remove');
Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('order', [HomeController::class, 'orderPlace'])->name('orderPlace');
Route::get('order-success/{id}', [HomeController::class, 'orderSuccess'])->name('orderSuccess');
Route::post('getAvailableDriver', [HomeController::class, 'getAvailableDriver'])->name('getAvailableDriver');


/* cms pages */
Route::get('about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('terms-conditions', [PageController::class, 'termConditions'])->name('terms-conditions');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('FAQ', [PageController::class, 'faq'])->name('FAQ');
