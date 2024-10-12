<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function shop() {
        $categories = Category::all();
        return view('template_pages/shop', compact('categories'));
    }
    public function categories() {
        $categories = Category::all();
        return view('template_pages/categories', compact('categories'));
    }

    public function category($slug) {
    // Получаем все категории
    $categories = Category::all();

    // Пытаемся найти категорию по slug
    $category = Category::where('slug', $slug)->first();

    // Если категория не найдена, устанавливаем её в null
    if (!$category) {
        $category = null; // Устанавливаем $category в null, если не найдена
    }

    // Возвращаем вид с категориями и найденной/не найденной категорией
    return view('template_pages/shop', compact('categories', 'category'));
    }
}
