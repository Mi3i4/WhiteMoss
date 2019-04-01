@extends('layout')

@section('content')
<div class="container exhibitions" style="margin-top: 80px">
    <h2 class='exhibitionHeader'>Выставки</h2>
    <div id="myCarousel" class="carousel slide myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active exhibition-slider-1">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item exhibition-slider-2">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item exhibition-slider-3">
                <div class="container">
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
    <p class='description'>Мы показываем вам чего мы достигли. А так же какие новые продукты вас ждут. К тому же всегда приятно встретиться вновь.</p>
</div>
@endsection('content')