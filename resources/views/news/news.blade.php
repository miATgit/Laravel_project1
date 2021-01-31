@extends('layouts.app')
@section('title')Новости@endsection
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    <h1>Новости</h1>

                    @foreach($news as $item)
                        <a href="{{route('newsOne.id', $item['id'])}}">{{$item['title']}}</a>
                        <a href="{{route('category.index', $item['category_id'])}}">(категория: .{{$item['category_name']}}.)</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
