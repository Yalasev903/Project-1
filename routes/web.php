<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/index-light', function () {
    return view('template_pages/index-light');
});
