<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function create(Request $request) {

        if ($request->isMethod('post')) {
            $data=News::getNews();
            $addData = $request->except('_token');

            $data[] = $addData;
            $id = array_key_last($data);
            $data[$id]['id'] = $id;
            $url = \Storage::url('public/default.jpg');
            if ($request->file('image')) {
                $path = \Storage::putFile('/public', $request->file('image'));
                $url = \Storage::url($path);
            }

            //get category name
                if (($data[$id]['category_id']) == 1) {
                    $category_name = "Спорт";
                }
                elseif (($data[$id]['category_id']) == 2) {
                        $category_name = "Политика";
                    }
                elseif (($data[$id]['category_id']) == 3) {
                    $category_name = "Здоровье";
                }
                elseif (($data[$id]['category_id']) == 4) {
                    $category_name = "Наука";
                }
                else $category_name = "без категории";
                //end get category name

                $data[$id]['image'] = $url;
                $data[$id]['category_name'] = $category_name;
            \File::put(storage_path().'\news.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            return redirect()->route('newsOne', $id);
        }

        return view ('news.createNews', //[
           // 'categories' => Category::getCategories()
       // ]
    );
    }

    public function edit(int $id) {
        return "Редактировать новость #ID {$id}";
    }
}
