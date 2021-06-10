@extends('layout')

@section('title')Відгуки@endsection

@section('header')
    <h1 class="header-content__title">
        Відгуки
    </h1>
@endsection


@section('slider')
    <div class="slider__item" style="background-image: url(images/img-1.jpg);"></div>
    <div class="slider__item" style="background-image: url(images/img-2.jpg);"></div>
    <div class="slider__item" style="background-image: url(images/img-3.jpg);"></div>
@endsection

@section('main_content')
    <section class="text-center">
        <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="comment_header">НОВИЙ ПОСТ</h3>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error  }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/reviews/check" method="post">
                    @csrf
                    <div class="row">
                        <div class="item">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="item">
                            <input type="text" name="subject" id="subject" placeholder="Тема" class="form-control">
                        </div>
                        <div class="item">
                            <textarea name="message" id="message" class="form-control" placeholder="Введіть текст посту" cols="30" rows="10"></textarea><br>
                        </div>
                        <div class="item">
                            <input type="file">
                        </div>
                        <div class="item">
                            <button type="submit" class="btn btn-success">Опублікувати</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
<section>
    <div class="container">
    @foreach($reviews as $el)
        <div class="mainState">
            <div class="mainImage">
                <img class="mImage" src="images/icon.jpg" alt="">
            </div>
            <div class="mainTxt">
                <h2 class="miniHeading">{{ $el->subject }}</h2>
                <h5 class="miniHeading">{{ $el->email }}</h5>
                <p class="para">
                    {{ $el->message }}
                </p>
            </div>
        </div>
    @endforeach
    </div>
</section>

@endsection
