@extends('layouts.app')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
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
                </div>
            </div>
        </div>
    </div>
@endsection
