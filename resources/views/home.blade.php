@extends('layout')

@section('content')
    {{--<div class="row">--}}
    {{--<div class="col svg_center">--}}
    {{--<object class="logo_back" type="image/svg+xml" data="/site_img/logoNormal.svg" width="170px">--}}
    {{--<img src="/site_img/logoNormal.svg" class="mr-3" alt="logo">--}}
    {{--</object>--}}
    {{--</div>--}}
    {{--<div class="col-sm">--}}
    {{--<h1 class="name">Научный центр биомедицинских технологий--}}
    {{--<br>--}}
    {{--Федерального медико-биологического агентства</h1>--}}
    {{--</div>--}}
    {{--<div class="col svg_logo svg_center">--}}
    {{--<address class="address">--}}
    {{--<strong>ЗАКАЗ ЖИВОТНЫХ</strong><br>--}}
    {{--<a href="+7 (49643)-32-132">+7 (49643)-32-132</a><br>--}}
    {{--<a href="+7 (49643)-31-692"> +7 (49643)-31-692</a><br>--}}
    {{--<a href="+7 (49643)-31-939"> +7 (49643)-31-939</a><br>--}}
    {{--<strong>Почта</strong><br>--}}
    {{--<a href="mailto:bel.mox@mail.ru">bel.mox@mail.ru</a><br>--}}
    {{--<a href="mailto:belmox@mail.ru">belmox@mail.ru</a>--}}
    {{--</address>--}}
    {{--</div>--}}
    {{--</div>--}}




    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active slider_photo" style="background-image: url({{ $page['slider']['pass'][0] }});">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{!! $page['slider']['title'][0] !!}</h1>
                        <p>{{ $page['slider']['text'][0] }}</p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Заказать</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item slider_photo" style="background-image: url({{ $page['slider']['pass'][1] }});">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{!! $page['slider']['title'][1] !!}</h1>
                        <p>{{ $page['slider']['text'][1] }}</p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Заказать</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item slider_photo" style="background-image: url({{ $page['slider']['pass'][2] }});">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{!! $page['slider']['title'][2] !!}</h1>
                        <p>{{ $page['slider']['text'][2] }}</p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Заказать</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container marketing">

        <div class="row justify-content-center">
            <div class="col-lg-4 justify-content-center">
                <img src="{{ $page['marketing']['exhibitions']['img'] }}" class="circle">
                <h2>{{ $page['marketing']['exhibitions']['title'] }}</h2>
                <p>{{ $page['marketing']['exhibitions']['text'] }}</p>
                <p><a class="btn btn-secondary" href="{{ route('exhibitions') }}" role="button">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="{{ $page['marketing']['partners']['img'] }}" class="circle">
                <h2>{{ $page['marketing']['partners']['title'] }}</h2>
                <p>{{ $page['marketing']['partners']['text'] }}</p>
                <p><a class="btn btn-secondary" href="{{ route('partners') }}" role="button">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="{{ $page['marketing']['certificates']['img'] }}" class="circle">
                <h2>{{ $page['marketing']['certificates']['title'] }}</h2>
                <p>{{ $page['marketing']['certificates']['text'] }}</p>
                <p><a class="btn btn-secondary" href="{{ route('certificates') }}" role="button">Подробнее &raquo;</a></p>
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{ $page['products']['animals']['title'] }}</h2>
                <p class="lead">
                   {{ $page['products']['animals']['text'] }} <a href="/products/animals">Подробнее...</a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{ $page['products']['animals']['img'] }}" class="featured_img img">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">{{ $page['products']['fertilizer']['title'] }}</h2>
                <p class="lead">
                    {{ $page['products']['fertilizer']['text'] }}<a href="/products/fertilizer">Подробнее...</a>
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ $page['products']['fertilizer']['img'] }}" class="featured_img img">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{ $page['products']['equipment']['title'] }}</h2>
                <p class="lead">
                    {{ $page['products']['equipment']['text'] }}<a href="/products/equipment">Подробнее...</a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{ $page['products']['equipment']['img'] }}" class="featured_img img">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>

@endsection