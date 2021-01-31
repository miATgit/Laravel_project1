@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    @forelse ($categories as $category)
                        <a href="{{@route('category.show', $category['slug'])}}">
                        <h2>{{ $category['title'] }}</h2></a><br>
                    @empty
                        <h2>Нет такой новости</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>


@endsection
