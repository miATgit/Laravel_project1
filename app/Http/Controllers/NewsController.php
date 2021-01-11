<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{


    public function index()
    {
        return view('news')->with('news', News::getNews());
    }

    public function news_single($id)
    {
        return view('newsOne')->with('news', News::getNewsId($id));
    }

    public function news_category($category_id)
    {
        return view('newsOne')->with('news', News::getNewsCategory($category_id));
    }

}
