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
}
