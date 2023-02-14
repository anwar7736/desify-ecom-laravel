<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;


Route::controller(AuthController::class)->group(function(){
    Route::group(['middleware'=>'guest_session'], function(){
        Route::get('login',  'viewLogin')->name('login');
        Route::post('login',  'login')->name('user.login');
        Route::get('register','viewRegister')->name('register');
        Route::post('register','register')->name('user.register');
    });
    
    Route::get('/change-password', 'changePassword')->name('password.change')->middleware('auth_session');
    Route::post('update-password', 'updatePassword')->name('password.update')->middleware('auth_session');
    Route::get('logout','logout')->name('logout');
});


Route::group(['middleware'=>'auth_session'], function(){
    Route::resource('profile', ProfileController::class);
    Route::resource('order', OrderController::class);
});

Route::resource('cart', CartController::class);

Route::controller(CartController::class)->group(function(){
    Route::get('/update-size', 'updateItemSize')->name('update.size');
    Route::get('/clear-all', 'clearAll')->name('clear.all');
    Route::get('/checkout', 'viewCheckout')->middleware('auth_session');
    Route::post('checkout', 'checkout')->name('checkout')->middleware('auth_session');
});


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/popular-categories', 'popular_categories')->name('popular.categories');
});

Route::controller(ProductController::class)->group(function(){

    
    Route::get('/home-category-product', 'homeCategoryProduct')->name('category.product');

    Route::get('/new-arrival', 'newArrival')->name('product.new');
    Route::get('/best-deal', 'bestDeal')->name('product.best');
    Route::get('/featured-product', 'featuredProduct')->name('product.featured');
    Route::get('/product-details/{id}', 'show')->name('product.show');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/related-products', 'relatedProducts')->name('product.related');
});


