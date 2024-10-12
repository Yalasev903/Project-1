<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;


Route::get('/', [MainController::class, 'index']);
Route::get('/shop', [CategoryController::class, 'shop']);

Route::get('/categories', [CategoryController::class, 'categories']);
Route::get('/category/{categorySlug}', [CategoryController::class, 'category']);
Route::get('/category/{slug}', [CategoryController::class, 'category'])->name('category.show');

Route::get('/cart', [MainController::class, 'cart']);
Route::get('/shop-single/{product}', [MainController::class, 'shop_single']);

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

Route::get('/login', function () {
    return view('template_pages/login');
});

Route::get('/register', function () {
    return view('template_pages/register');
});

Route::get('/shop-2', function () {
    return view('template_pages/shop-2');
});



