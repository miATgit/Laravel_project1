<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category

{
    private static $categories = [
        1 => [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        2 => [
            'id' => 2,
            'title' => 'Политика',
            'slug' => 'politics'
        ]
    ];

    public static function getCategories() {
        return json_decode(\File::get(storage_path().'/category.json'), true);
}

    public static function getCategoryById() {
        if (array_key_exists($id, static::$categories)) {
            return static::$categories[$id];
        }
        else return [];
    }

    public static function getCategoryIdBySlug($slug) {
        $id = null;
        $name = null;
        foreach (static::$categories as $category) {
            if($category['slug'] == $slug) {
            $id = $category['id'];
            $name = $category['title'];
            break;
            }
        }
        return $id;
        return $name;
    }

    public static function getCategoryNameBySlug($slug) {
        $id = Category::getCategoryIdBySlug($slug);
        $category = Category::getCategoryById($id);
        if ($category !=[]) {
            return $category['title'];
        }
        else return [];
    }

}
