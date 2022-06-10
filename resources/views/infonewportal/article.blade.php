@extends('infonewportal.layouts.layout')

@section('content')
    <script src="{{asset('js/AddReview.js')}}"></script>
    <div class="posts-list">
        <article id="post-1" class="post">

            <div class="post-image"><a href=""><img
                        src="{{$article->photo}}"></a>
            </div>
            <div class="post-content">
                <div class="category"><a
                        href="{{route('getArticlesByCategory', $article->categories['category_slug'])}}">{{$article->categories['category']}}</a>
                </div>
                <h2 class="post-title">{{$article->title}}</h2>
                <p>{{$article->content}}</p>
                <div class="post-footer">

                    {{--                    <div class="col-xs-12 col-sm-12 col-md-12">--}}
                    <div>
                        <strong>Комментарии к статье:</strong>
                        <hr>
                        @foreach($comments as $comment)
                            <p>Оценка статьи: {{$comment['mark']}}</p>
                            <p>Комментарий к статье: {{$comment['text']}}</p>
                            <hr>
                        @endforeach
                    </div>

                    @if (Route::has('login'))
                        @auth
                            <div id="comments"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Оцените статью (от 1 до 10):</strong>
                                    <input type="hidden" name="article_id" id="article_id" value={{$article->id}}>
                                    <input type="hidden" name="_token" id="_token" value={{ csrf_token() }}>
                                    <input type="text" id="review_mark" name="mark">
                                    <br><br>
                                    <strong>Напишите комментарий:</strong>
                                    <textarea class="form-control" style="height:100px" type="text" id="review_text"
                                              name="text"></textarea>
                                    <br>
                                    <button class="btn btn-info" id="send_review">Добавить комментарий</button>
                                </div>
                                <br>
                            </div>


                            @if ($article->user_id == $user->id)
                                <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                                    <br>
                                    <a class="more-link" href="{{ route('articles.edit',$article->id) }}">Редактировать
                                        статью</a><br><br>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Удалить статью</button>
                                    {{--                                    <button type="submit" class="more-link">Удалить статью</button>--}}
                                    <br><br>
                                </form>
                            @endif
                        @endauth
                    @endif

                    <a class="more-link" href="/">Вернутся на главную</a>
                    {{--                    <div class="post-social">--}}
                    {{--                        <a href="" target="_blank"><i class="fa fa-facebook"></i></a>--}}
                    {{--                        <a href="" target="_blank"><i class="fa fa-twitter"></i></a>--}}
                    {{--                        <a href="" target="_blank"><i class="fa fa-pinterest"></i></a>--}}
                    {{--                    </div>--}}
                </div>

            </div>
        </article>
    </div>

    <aside>
        <div class="widget">
            <h3 class="widget-title">Категории</h3>
            <ul class="widget-category-list">
                @foreach($categories as $category)
                    <li>
                        <a href="{{route('getArticlesByCategory', $category->category_slug)}}">{{$category->category}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        {{--        <div class="widget">--}}
        {{--            <h3 class="widget-title">Последние записи</h3>--}}
        {{--            <ul class="widget-posts-list">--}}
        {{--                <li>--}}
        {{--                    <div class="post-image-small">--}}
        {{--                        <a href=""><img--}}
        {{--                                src="{{$article->photo}}"></a>--}}
        {{--                    </div>--}}
        {{--                    <h4 class="widget-post-title">{{$article->title}}</h4>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--        </div>--}}
        {{--        <div class="widget">--}}
        {{--            <h3 class="widget-title">Подписка на рассылку</h3>--}}
        {{--            <form action="" method="post" id="subscribe">--}}
        {{--                <input type="email" name="email" placeholder="Ваш email" required>--}}
        {{--                <button type="submit"><i class="fa fa-paper-plane-o"></i></button>--}}
        {{--            </form>--}}
        {{--        </div>--}}
    </aside>
@endsection
