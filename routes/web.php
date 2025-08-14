<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/reset', function () {
    return view('auth.reset-password');
});

Route::get('/contact-us', function () {
    return view('know-us.contact');
});

Route::get('/about', function () {
    return view('know-us.about');
});

Route::get('/about-us', function () {
    return view('know-us.about-us');
});
Route::get('/faq', function () {
    return view('know-us.faq');
});
Route::get('/product', function () {
    return view('product.product');
});

Route::get('/offers', function () {
    return view('offers.offers');
});

Route::get('/product-list', function () {
    return view('product.product-list');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/products', function () {
    return view('admin.products');
})->name('admin.products');

