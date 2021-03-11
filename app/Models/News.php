<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News
{

    private static $news1 = [

        1 => [
            'id' => 1,
            'category_id' => 1,
            'category_name' => 'спорт',
            'title' => 'Новость 1',
            'text' => 'Текст новости 1111'
        ],
        2 => [
            'id' => 2,
            'category_id' => 2,
            'category_name' => 'политика',
            'title' => 'Новость 2',
            'text' => 'Текст новости 22'
        ],
        3 => [
            'id' => 3,
            'category_id' => 2,
            'category_name' => 'политика',
            'title' => 'Новость 3',
            'text' => 'Текст новости 333'
        ],
        4 => [
            'id' => 4,
            'category_id' => 1,
            'category_name' => 'спорт',
            'title' => 'Новость 4',
            'text' => 'Текст новости из массива'
        ]
    ];

    public static function getNewsAll() {
        $news = DB::table('news');
        return $news;

    }

    public static function getNews() {
        $news = DB::table('news')->paginate(5);
        return $news;

    }

    public static function getNewsId($id) {
       return static::getNewsAll()->find($id);

    }

    public static function getNewsCategory($category_id) {
        foreach (static::getNews() as $news){
            if ($news['category_id'] == $category_id) {
                return $news;
            }
        }
        return [];
    }

    public static function getNewsByCategorySlug($slug) {
        $id = Category::getCategoryIdBySlug($slug);
        $news = [];
        foreach (static::getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

}
