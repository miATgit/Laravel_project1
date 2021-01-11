@extends('layout')
@section('title')Администрирование новостей@endsection
@section('main_content')
    <ul class="me-auto mb-2 mb-md-0">
        <h2>Создание и редактирование новостей</h2>
        <li class="nav-item">
            <a class="nav-link" href="/news/edit">Редактировать новость</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/news/create">Создать новость</a>
        </li>
@endsection
