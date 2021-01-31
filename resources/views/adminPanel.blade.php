@extends('layouts.app')
@section('title')Администрирование новостей@endsection
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <div class="card">
                    <ul class="me-auto mb-2 mb-md-0">
                        <h2>Создание и редактирование новостей</h2>
                        <li class="nav-item">
                            <a class="nav-link" href="/news/edit">Редактировать новость</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news/create">Создать новость</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
