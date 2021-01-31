<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;

class CategoryController extends Controller
{
    public function index() {
        return view('news.categories')->with('categories', Category::getCategories());
    }

    public function show($slug) {
        return view('news.category')->with('news', News::getNewsByCategorySlug($slug));
    }
}
