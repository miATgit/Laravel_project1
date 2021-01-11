@extends('layout')
@section('title')Новости@endsection
@section('main_content')
    <h1>Новости</h1>
    <h2>Категории новостей</h2>
    @foreach($news as $item)
        <a href="{{route('newsOne.category', $item['category_id'])}}">{{$item['category_name']}}</a><br>
    @endforeach
    @foreach($news as $item)
        <a href="{{route('newsOne.id', $item['id'])}}">{{$item['title']}}</a><br>
    @endforeach
    @yield('news_single')

@endsection
