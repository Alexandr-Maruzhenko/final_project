@extends('infonewportal.layouts.layout')

@section('content')

    <div class="container-categories">
        <p>Доступные категории:</p>
        <ul>
        @foreach($categories as $category)
            <li><a href="{{route('getArticlesByCategory', $category->category_slug)}}">{{$category->category}}</a></li>

        @endforeach
        </ul>
        <hr>
    </div>

    @foreach ($articles as $article)
        <div class="posts-list-main">
            <article id="post-1" class="post">

                <div class="post-image">
                    <a href="{{route('getArticle', [$article->categories['category_slug'], $article->article_slug])}}"><img
                            src="{{$article->photo}}"></a>
                </div>
                <div class="post-content">

                    <div class="category">
                        <a href="{{route('getArticlesByCategory', $article->categories['category_slug'])}}">{{$article->categories['category']}}</a>
                    </div>

                    <h2 class="post-title">{{$article->title}}</h2>
                    <p>{{$article->description}}</p>
                    <div class="post-footer">
                        @if (Route::has('login'))
                            @auth
                                @if ($article->user_id == $user->id)
                                    <p class="autor">Вы автор данной статьи</p>
                                @endif
                            @endauth
                        @endif
                        <a class="more-link"
                           href="{{route('getArticle', [$article->categories['category_slug'], $article->article_slug])}}">Продолжить
                            чтение</a>
                        <div class="post-social">
                            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    @endforeach
    <div class="posts-list-main">
        {{ $articles->onEachSide(5)->links('vendor.pagination.bootstrap-4') }}
    </div>
@endsection
