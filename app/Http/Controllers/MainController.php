<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function shop() {
        return view('template_pages/shop');
    }
    public function categories() {
        return view('template_pages/categories');
    }

    public function category($category) {
        return view('template_pages/shop', compact('category'));
    }

    public function cart() {
        return view('template_pages/cart');
    }

    public function shop_single($product) {
        return view('template_pages/shop-single', ['product' => $product]);
    }

}
