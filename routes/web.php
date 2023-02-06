<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;


Route::resource('cart', CartController::class);

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product-details/{id}', 'show')->name('product.show');
    Route::get('/shop', 'shop')->name('shop');
});

Route::controller(AuthController::class)->group(function(){

});

