<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{


    public function index()
    {
        return view('news.news')->with('news', News::getNews());
    }

    public function news_single($id)
    {
        return view('news.newsOne')
            ->with('news', News::getNewsId($id));
    }

    public function news_category($category_id)
    {
        return view('news.newsOne')->with('news', News::getNewsCategory($category_id));
    }

    public function search(Request $request) {

        $news = DB::table('news')
            ->where('title', 'like', '%'.$request->input('query').'%')
            ->orWhere('text', 'like', '%'.$request->input('query').'%')
        ->get();


        $count = $news->count();


        return view('news.search-results')->with('news', $news)->with('count', $count);
    }

}
