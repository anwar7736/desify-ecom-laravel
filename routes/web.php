<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;


Route::resource('cart', CartController::class);
Route::get('/clear-all', [CartController::class, 'clearAll'])->name('clear.all');

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/popular-categories', 'popular_categories')->name('popular.categories');
});

Route::controller(ProductController::class)->group(function(){

    Route::get('/new-arrival', 'newArrival')->name('product.new');
    Route::get('/best-deal', 'bestDeal')->name('product.best');
    Route::get('/featured-product', 'featuredProduct')->name('product.featured');
    Route::get('/product-details/{id}', 'show')->name('product.show');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/related-products', 'relatedProducts')->name('product.related');
});

Route::controller(AuthController::class)->group(function(){

});

