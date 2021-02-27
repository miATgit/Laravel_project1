@extends('layouts.app')
@section('content')

                    @forelse ($categories as $category)
                        <a href="{{@route('category.show', $category['slug'])}}">
                        <h2>{{ $category['title'] }}</h2></a><br>
                    @empty
                        <h2>Нет такой новости</h2>
                    @endforelse

@endsection
