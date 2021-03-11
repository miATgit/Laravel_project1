@extends('layouts.app')
@section('title')Новости@endsection
@section('content')

                    <div class="card-body">
                        <h1>Новости</h1>

                        @foreach($news as $item)
                            <img style="max-width:30px;" src="{{$item->image}}">
                            <a href="{{route('newsOne', $item->id)}}">{{$item->title}}</a>
                            <a href="{{route('category.index', $item->category_id)}}">(категория: .{{$item->category_name}}.)</a><br>

                        @endforeach
                    </div>

                            {{$news->links()}}
                      

@endsection
