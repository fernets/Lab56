
@extends('layout')

@section('title')Главная страница @endsection

@section('slider')
    <div class="slider__item" style="background-image: url(images/slide-1.jpg);"></div>
    <div class="slider__item" style="background-image: url(images/slide-2.jpg);"></div>
    <div class="slider__item" style="background-image: url(images/slide-3.jpg);"></div>
@endsection

@section('header')
    <h1 class="header-content__title">
        Roadster
    </h1>
    <div class="header-content__text">
        Найшвидший автомобіль в світі, з рекордним прискоренням, дальністю і продуктивністю.
    </div>
    <a href="/reviews" class="button">
        Хочу тест драйв
    </a>
@endsection

@section('main_content')
    <section class="statistics">
        <div class="container">
            <div class="statistics-items">
                <div class="statistics-item">
                    <div class="statistics-item__title">
                        Двигун
                    </div>
                    <div class="statistics-item__num">
                        2,1 <span>сек</span>
                    </div>
                    <div class="statistics-item__descr">
                        разгон до 100 км
                    </div>
                </div>
                <div class="statistics-item">
                    <div class="statistics-item__title">
                        Батарея
                    </div>
                    <div class="statistics-item__num">
                        1000 <span>км</span>
                    </div>
                    <div class="statistics-item__descr">
                        запас хода
                    </div>
                </div>
                <div class="statistics-item">
                    <div class="statistics-item__title">
                        Швидкість
                    </div>
                    <div class="statistics-item__num statistics-item__num--speed">
                        400 <span>км/ч</span>
                    </div>
                    <div class="statistics-item__descr">
                        макс швидкість
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <img src="images/section-img.jpg" alt="">
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="advantages-inner">
                <div class="advantages-inner__row">

                    <div class="advantages-descr">
                        <div class="advantages__title">Швидкість</div>
                        <div class="advantages__text">
                            Самий
                            швидкоразгоняющійся
                            серійний автомобіль
                            з коли-небудь створених
                        </div>
                    </div>

                    <div class="advanteages__img">
                        <img src="images/advantages-1.jpg" alt="">
                    </div>
                </div>

                <div class="advantages-inner__row">
                    <div class="advanteages__img">
                        <img src="images/advantages-2.jpg" alt="">
                    </div>
                    <div class="advantages-descr">
                        <div class="advantages__text">
                            <ul>
                                <li>Датчик дощу</li>
                                <li>Датчик світла</li>
                                <li>Автопілот</li>
                                <li>Навигаційна система</li>
                                <li>Обогрів дзеркал</li>
                                <li>Підсилювач керма</li>
                                <li>Панорамна криша</li>
                                <li>Ксенонові фари</li>
                            </ul>
                        </div>
                        <div class="advantages__title
            advantages__title--bottom">Переваги</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="design">
        <div class="container">
            <div class="design__images">
                <img src="images/design.jpg" alt="">
            </div>
            <div class="design-row">
                <div class="design-row__item">
                    <div class="design-row__item-num">01</div>
                    <div class="design-row__item-text">
                        Новий родстер був розроблений колишнім дизайнером Mazda Францем фон Хольцхаузеном.
                        Має знімну скляний дах і кузов з двома передніми сидіннями плюс два невеликих сидіння ззаду.
                    </div>
                </div>
                <div class="design-row__item">
                    <div class="design-row__item-num">02</div>
                    <div class="design-row__item-text">
                        Родстер має три електродвигуни, один спереду і два ззаду,
                        Вони забезпечують повний привід, а також систему адресного розподілу крутного моменту для кращого
                        проходження поворотів.
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
