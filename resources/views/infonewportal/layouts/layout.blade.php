<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info News Portal</title>
    <link rel="stylesheet" type="text/css" href="../../../css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../css/header.css">
    <link rel="stylesheet" type="text/css" href="../../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../../css/side.css">
    <link rel="stylesheet" type="text/css" href="../../../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../../../css/media.css">

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic|Playfair+Display:400,700&subset=latin,cyrillic">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>

<div class="wrapper">

<header>
    <nav class="container">
        <a class="logo" href="">
            <span>A</span>
            <span>L</span>
            <span>E</span>
            <span>X</span>
            <span>-</span>
            <span>N</span>
            <span>E</span>
            <span>W</span>
            <span>S</span>
        </a>
        <div class="nav-toggle"><span></span></div>
        {{--        <form action="" method="get" id="searchform">--}}
        {{--            <input type="text" placeholder="Искать на сайте...">--}}
        {{--            <button type="submit"><i class="fa fa-search"></i></button>--}}
        {{--        </form>--}}
        <ul id="menu">
            <li><a href="/">Главная</a></li>
            <li><a href="/blog">Блог</a></li>
            <li><a href="/portfolio">Портфолио</a></li>
            <li><a href="/about">Об авторе</a></li>

            @if (Route::has('login'))
                @auth
                    {{--                    <li><a href="{{ url('/home') }}">Кабинет</a></li>--}}
                    <li><a href="{{route('createArticle')}}">Добавить статью</a></li>
                    <li><a href="{{ url('/logout') }}">{{auth()->user()['name']}} (Выйти)</a></li>
                @else
                    <li><a href="{{ route('login') }}">Войти</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <div class="container">
        <div class="footer-col"><span>Маруженко А.С. © 2022</span></div>
        <div class="footer-col">
            <div class="social-bar-wrap">
                <a title="Facebook" href="" target="_blank"><i class="fa fa-facebook"></i></a>
                <a title="Twitter" href="" target="_blank"><i class="fa fa-twitter"></i></a>
                <a title="Pinterest" href="" target="_blank"><i class="fa fa-pinterest"></i></a>
                <a title="Instagram" href="" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-col">
            <a href="">Отправить сообщение</a>
        </div>
    </div>
</footer>

</div>

<script>
    $('.nav-toggle').on('click', function () {
        $('#menu').toggleClass('active');
    });
</script>

{{--<script src="../../../js/bootstrap.min.js"></script>--}}
</body>
</html>
