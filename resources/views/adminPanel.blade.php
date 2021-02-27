@extends('layouts.app')
@section('title')Администрирование новостей@endsection
@section('content')

                    <ul class="me-auto mb-2 mb-md-0">
                        <h2>Создание и редактирование новостей</h2>
                        <li class="nav-item">
                            <a class="nav-link" href="/news/edit">Редактировать новость</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{@route('news.create')}}">Создать новость</a>
                        </li>
                    </ul>

@endsection
