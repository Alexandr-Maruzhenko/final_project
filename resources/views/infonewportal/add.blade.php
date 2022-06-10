@extends('infonewportal.layouts.layout')

@section('content')
    @if (Route::has('login'))

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()['id']}}">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label><strong>Выбор категории статьи</strong></label>
                        <select class="form-control input-sm" name="category_id">
                            {{--                        <option value="">Категория статьи </option>--}}
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Человеко-понятный URL:</strong>
                        <input type="text" name="article_slug" class="form-control" placeholder="Придумайте URL">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Фото для статьи:</strong>
                        <input type="file" name="userfile" class="form-control" placeholder="Выбор фото">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Заголовок:</strong>
                        <input type="text" name="title" class="form-control" placeholder="Заголовок статьи">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Краткое содержание:</strong>
                        <textarea class="form-control" style="height:100px" name="description"
                                  placeholder="Краткое содержание статьи"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Содержание статьи:</strong>
                        <textarea class="form-control" style="height:300px" name="content"
                                  placeholder="Текст статьи"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <p></p>
                    <button type="submit" class="btn btn-primary">Опубликовать статью</button>
                </div>
            </div>

        </form>
    @endif
@endsection
