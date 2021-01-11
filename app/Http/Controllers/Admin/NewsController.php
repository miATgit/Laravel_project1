<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function create()
    {
        return view('news');
        "создать новость";
    }

    public function edit(int $id)
    {
        return "Редактировать новость #ID {$id}";
    }
}
