@extends('layouts.app')

@section('content')

    <div class="card-header"><h3>Добавление Новости</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('news.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row mb-3">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Заголовок новости') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control" name="title" value="{{ old('header') }}" autofocus>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Текст новости') }}</label>

                <div class="col-md-6">
                    <input id="text" type="text" class="form-control" name="text">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Категория') }}</label>
                <div class="col-md-6">
                    <select class="form-select col-md-2" aria-label="Default select example" name="category_id">
                        <option selected value="1">Спорт</option>
                        <option value="2">Политика</option>
                        <option value="3">Здоровье</option>
                        <option value="4">Наука</option>
                    </select>
                </div>
            </div>

            <div class="form-group row" style="margin-left: 5px!important;">
                <input type="file" name="image">
            </div>

            <div class="form-group row mt-3 mb-3">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Отправить') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
