<?php

use App\Helpers\Helper;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\PreventBackButtonMiddleware;
use Illuminate\Support\Facades\App;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\File;

// Define your 404 route
Route::get('/404', function () {
    abort(404);
})->name('404');


Route::group([
    'middleware' => [
        PreventBackButtonMiddleware::class,
        SetLocale::class
    ]
],function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('collections/all', [HomeController::class, 'shop'])->name('shop');
    Route::get('collections/{slug?}', [HomeController::class, 'categoryshop'])->name('shopCategory');
    Route::get('products/{slug?}', [HomeController::class, 'productDetail'])->name('productDetail');
    Route::get('cart', [HomeController::class, 'cart'])->name('cart');
    Route::post('cart/add', [HomeController::class, 'addToCart'])->name('cart.add');
    Route::post('cart/sync', [HomeController::class, 'cartSync'])->name('cart.sync');
    Route::post('cart/remove', [HomeController::class, 'cartRemove'])->name('cart.remove');
    Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');
    Route::post('order', [HomeController::class, 'orderPlace'])->name('orderPlace');
    Route::get('order-success/{id}', [HomeController::class, 'orderSuccess'])->name('orderSuccess');
    Route::post('getAvailableDriver', [HomeController::class, 'getAvailableDriver'])->name('getAvailableDriver');

    Route::post('quotation/request', [HomeController::class, 'storeQuotationRequest'])->name('quotation.request');
    Route::get('quotation/successfully-requested/{id}', [HomeController::class, 'quotationSuccessfullyRequested'])->name('quotation.successfully-requested');

    /* Stripe Payment */
    Route::post('stripe/payment', [HomeController::class, 'stripePayment'])->name('stripePayment');


    /* cms pages */
    Route::get('pages/about', [PageController::class, 'aboutUs'])->name('about-us');
    Route::get('pages/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
    Route::get('pages/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
    Route::post('contact-us/store', [HomeController::class, 'contactUsStore'])->middleware('throttle:5,1')->name('contactUs.store');
    Route::get('pages/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('pages/terms-conditions', [PageController::class, 'termConditions'])->name('terms-conditions');
    Route::get('pages/blog', [PageController::class, 'blog'])->name('blog');
    Route::get('pages/blog/{slug}', [PageController::class, 'blogDetail'])->name('blogDetail');
    Route::get('pages/refund-and-return-policy', [PageController::class, 'refundPolicy'])->name('refund-policy');
    Route::get('pages/shipping-policy', [PageController::class, 'shippingPolicy'])->name('shipping-policy');
});


Route::fallback(function () {
    return redirect()->route('404');
});

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, Helper::getMultiLang())) {
        session(['locale' => $locale]);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('change.language');