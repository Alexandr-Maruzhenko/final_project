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

        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method ('PUT')
            <div class="row">
                <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()['id']}}">
                <input type="hidden" name="photo" class="form-control" value="{{$article->photo}}">
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
                        <input type="text" name="article_slug" value="{{ $article->article_slug }}" class="form-control" placeholder="Придумайте URL">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Фото для статьи (если не выбрать, то останется прежнее фото): </strong>
                        <input type="file" name="userfile" class="form-control" placeholder="Выбор фото">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Заголовок:</strong>
                        <input type="text" name="title" value="{{ $article->title }}" class="form-control" placeholder="Заголовок статьи">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Краткое содержание:</strong>
                        <textarea class="form-control" style="height:100px" name="description"
                                  placeholder="Краткое содержание статьи">{{ $article->description }}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Содержание статьи:</strong>
                        <textarea class="form-control" style="height:300px" name="content"
                                  placeholder="Текст статьи">{{ $article->content }}</textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <p></p>
                    <button type="submit" class="btn btn-primary">Сохранить новый вариант</button>
                </div>
            </div>

        </form>
    @endif
@endsection
