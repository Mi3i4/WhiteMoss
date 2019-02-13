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
            <div class="carousel-item active slider_photo_1">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Научный центр биомедицинских технологий<br> Федерального медико-биологического агентства</h1>
                        <p>Питомник находится в экологически чистом районе Московской области.</p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Заказать</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item slider_photo_2">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Биоудобрения</h1>
                        <p>Масса биогумуса имеет хорошее структурное состояние. Когда она попадает в почву, даже если
                            почва глинистая плотная, тяжелого механического состава, происходит ее ускоренное
                            оструктуривание, это очень важно.</p>
                        {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Заказать</a></p>--}}
                    </div>
                </div>
            </div>
            <div class="carousel-item slider_photo_3">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Оборудование</h1>
                        <p>Учитывая много летний опыт разведения кроликов, наше производство отвечает всем требованиям
                            в кролиководстве. Оборудование изготовленное на нашем предприятии обеспечивает весь цикл
                            выращивания качественных лабораторных животных.</p>
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

    <div class="container marketing" style="margin-top: 50px">

        <div class="row justify-content-center">
            <div class="col-lg-4 justify-content-center">
                <img src="/site_img/exhib.jpg" class="circle">
                <h2>Выставки</h2>
                <p>Мы показываем вам чего мы достигли. А так же какие новые продукты вас ждут. К тому же всегда приятно встретиться вновь.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="/site_img/partners.jpg" class="circle">
                <h2>Наши партнеры</h2>
                <p>Те, кто работают с нами знают, что наша команда найдет выход из любой ситуации и сделает все точно в
                    срок.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Подробнее &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="/site_img/permit_new.jpg" class="circle">
                <h2>Наши сертификаты</h2>
                <p>Мы выдаем сертификаты на всю нашу продукцию. Лицензирование производится по всем нормам и
                    стандартам.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Подробнее &raquo;</a></p>
            </div>
        </div>


        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Лабораторные животные</h2>
                <p class="lead">
                    Мы занимается выращиванием кроликов породы «Советская Шиншилла» более 47-ти лет.
                    Питомник находится в экологически чистом районе Московской области здесь среди наших полей и озер
                    содержатся наши лабораторные животные.
                    Технология применяемая на ферме "Метод внутреннего содержания в больших ангарах». При присмотре
                    ведущих животноводов и ветеринаров. <a href="#">Подробнее...</a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="/site_img/krol.jpg" class="featured_img">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Биоудобрения</h2>
                <p class="lead">
                    Масса биогумуса имеет хорошее структурное состояние.
                    Когда она попадает в почву, даже если почва глинистая плотная, тяжелого механического состава,
                    происходит ее ускоренное оструктуривание, это очень важно.
                    Создается благоприятный водно-воздушный режим для развития корневой системы.<a href="#">Подробнее...</a>
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="/site_img/bio.jpg" class="featured_img">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Оборудование</h2>
                <p class="lead">
                    Учитывая многолетний опыт разведения кроликов, наше производство отвечает всем требованиям в
                    кролиководстве.
                    Оборудование изготовленное на нашем предприятии обеспечивает весь цикл выращивания качественных
                    лабораторных животных.<a href="#">Подробнее...</a>
                </p>
            </div>
            <div class="col-md-5">
                <img src="/site_img/ferma.jpg" class="featured_img">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>

@endsection