@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    @if ($news)
                        @forelse($news as $item)
                            <h2>{{ $item['title'] }}</h2><br>
                            <p>{{ $item['text'] }}</p><br>
                            <a href="{{@route('category.show', $item['id'])}}"></a>
                        @empty
                            нет такой новости
                        @endforelse
                    @else
                        <h2>Нет такой новости</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
