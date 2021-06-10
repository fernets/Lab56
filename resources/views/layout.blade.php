<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <div id="menu" class="navbar">
        <img class="close" src="images/close.png" alt="" onclick="closemenu()">
        <div class="container">
            <div class="inner">
        <nav>
            <ul>
                <li><a href="/">ГОЛОВНА</a></li>
                <li><a href="">ПРО АВТО</a></li>
                <li><a href="/reviews">ВІДГУКИ</a></li>
                <li><a href="">КОНТАКТИ</a></li>
            </ul>
        </nav>
            </div>
    </div>
</div>
<header class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="/">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="header-btn" onclick="openmenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="header-content">
            @yield('header')
        </div>
    </div>
</header>
<section class="slider-top">
    <div class="slider">
        @yield('slider')
    </div>
</section>


    @yield('main_content')

<footer class="footer">
    <div class="container">
        <div class="footer-btn">
            <a href="/reviews" class="button">
                Хочу тест драйв
            </a>
        </div>
        <div class="footer-copy">
            <ul>
                <li>Tesla © 2021</li>
                <li><a href="#">Приватність та легальність</a></li>
                <li><a href="#">Контакти</a></li>
                <li><a href="#">Кар'єра</a></li>
                <li><a href="#">Новини</a></li>
                <li><a href="#">Форуми</a></li>
                <li><a href="#">Місцезнаходження</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
    <script>
        var menu = document.getElementById("menu");

        function closemenu() {
            menu.style.top = "-100vh";
        }
        function openmenu() {
            menu.style.top = "0";
        }
    </script>
</body>
</html>
