<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\MainController::class,'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\MainController::class,'about'])->name('about');
Route::get('/contacts', [\App\Http\Controllers\MainController::class,'contacts'])->name('contacts');
Route::get('/adminPanel', [\App\Http\Controllers\MainController::class,'adminPanel'])->name('admin.index');

Route::get('/news', [\App\Http\Controllers\NewsController::class,'index'])->name('news');
Route::get('/newsOne/{id?}', [\App\Http\Controllers\NewsController::class,'news_single'])-> where('id', '\d+')->name('newsOne.id');
Route::get('/newsOne/{category?}', [\App\Http\Controllers\NewsController::class,'news_category'])-> where('id', '\d+')->name('newsOne.category');

Route::get('/admin/news/create', [\App\Http\Controllers\NewsController::class,'create'])->name('news.create');
Route::get('/admin/news/{id}/edit', [\App\Http\Controllers\NewsController::class,'edit'])-> where('id', '\d+')->name('news.edit');



