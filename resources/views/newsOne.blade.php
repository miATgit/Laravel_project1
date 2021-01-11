@extends('layout')
@section('main_content')
@if (isset ($news['title']))
    <h2>{{ $news['title'] }}</h2><br>
    @else
        <h2>Нет такой новости</h2>
    @endif
@if (isset ($news['text']))
    <p>{{ $news['text'] }}</p>
@else
    <p>Попробуйте как-то по-другому поискать</p>
@endif
@endsection
