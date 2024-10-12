<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function cart() {
        return view('template_pages/cart');
    }

    public function shop_single($product) {
        return view('template_pages/shop-single', ['product' => $product]);
    }

}
