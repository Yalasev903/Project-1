<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});


//Страницы шаблона
Route::get('/index-light', function () {
    return view('template_pages/index-light');
});

Route::get('/about', function () {
    return view('template_pages/about');
});

Route::get('/blog-grid', function () {
    return view('template_pages/blog-grid');
});

Route::get('/blog-list', function () {
    return view('template_pages/blog-list');
});

Route::get('/blog-single', function () {
    return view('template_pages/blog-single');
});

Route::get('/blog', function () {
    return view('template_pages/blog');
});

Route::get('/cart', function () {
    return view('template_pages/cart');
});

Route::get('/checkout', function () {
    return view('template_pages/checkout');
});

Route::get('/contact', function () {
    return view('template_pages/contact');
});

Route::get('/error', function () {
    return view('template_pages/error');
});

Route::get('/index-2-light', function () {
    return view('template_pages/index-2-light');
});

Route::get('/index-2', function () {
    return view('template_pages/index-2');
});

Route::get('/index-light', function () {
    return view('template_pages/index-light');
});

Route::get('/login', function () {
    return view('template_pages/login');
});

Route::get('/register', function () {
    return view('template_pages/register');
});

Route::get('/shop-2', function () {
    return view('template_pages/shop-2');
});

Route::get('/shop-single', function () {
    return view('template_pages/shop-single');
});

Route::get('/shop', function () {
    return view('template_pages/shop');
});
