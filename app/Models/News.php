<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News
{

    private static $news = [

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
            'text' => 'Текст новости 4444'
        ]
    ];

    public static function getNews() {
        return static::$news;
    }

    public static function getNewsId($id) {
        if (array_key_exists($id, static::$news)) {
            return static::$news[$id];
        }
        else return [];
    }

    public static function getNewsCategory($category_id) {
        foreach (static::$news as $news){
            if ($news['category_id'] == $category_id) {
                return $news;
            }
        }
        return [];
    }

    public static function getNewsByCategorySlug($slug) {
        $id = Category::getCategoryIdBySlug($slug);
        $news = [];
        foreach (static::$news as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

}
