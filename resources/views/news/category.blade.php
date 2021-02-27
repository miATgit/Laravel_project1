@extends('layouts.app')
@section('content')

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

@endsection
