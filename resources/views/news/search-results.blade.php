@extends('layouts.app')
@section('title')Результаты поиска@endsection
@section('content')

    <div class="card-body">
        <h2>Результаты поиска</h2>

        <p><span class="red">{{$count}}</span> matches for <span class="italic">"{{request()->input('query')}}"</span></p>

        @foreach($news as $news)
            <div>
                <h4>{{$news->title}}</h4>
                <p>{{$news->text}}</p>
            </div>
        @endforeach
    </div>




@endsection
