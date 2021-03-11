<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
//use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{


    public function create(Request $request) {

        if ($request->isMethod('post')) {
            $data = News::getNewsAll()->get();
            $addData = $request->except('_token');
            $data[] = $addData;

            $url = 'public/default.jpg';

            if ($request->file('image')) {
                $path = \Storage::putFile('/public', $request->file('image'));
                $url = \Storage::url($path);
            }

            $category_name = $request->category_id;
            if ($request->category_id == '1'){$category_name = 'Спорт';}
            elseif ($request->category_id == '2'){$category_name = 'Политика';}
            elseif ($request->category_id == '3'){$category_name = 'Здоровье';}
            elseif ($request->category_id == '4'){$category_name = 'Наука';}


            $data = [
                'title' => $request->title,
                'text' => $request->text,
                'category_id' => $request->category_id,
                'category_name' =>$category_name,
                'image' =>$url
            ];


            $id = DB::table('news')->insertGetId($data);



                return redirect()->route('newsOne', $id);
        }
    return view('news.createNews')->with('success', 'Новость добавлена');
        //return redirect()->route('news.news', $id)->with('success', 'Новость добавлена');
    }

    public function edit(int $id) {
        return "Редактировать новость #ID {$id}";
    }

    public function store(Request $request) {
        $news['created_at'] = date(now());
        $news +=$request->except('_token');
        if ($request->image) {
            $path = Storage::putFile('publc/image', $request->image);
            $news['image'] = Storage::url($path);
            $id = DB::table('news')->insertGetId($news);

            return redirect()->action(
                [\App\Http\Controllers\NewsController::class, 'show'], ['id'=> $id])
                ->with('success', 'Ваша новость успешо добавлена');
        }
    }
}
