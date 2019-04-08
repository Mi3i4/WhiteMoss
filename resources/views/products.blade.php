@extends('layout')

@section('content')
<div class="container products">
    <h2 class='productsHeader'>{{ $data['header'] }}</h2>
    <div id="myCarousel" class="carousel slide myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active productsSlider" style="background-image: url({{ $data['sliderPass'][0] }});">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item productsSlider" style="background-image: url({{ $data['sliderPass'][1] }});">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item productsSlider" style="background-image: url({{ $data['sliderPass'][2] }});">
                <div class="container"
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
    @foreach ($data['description'] as $paragraph)
        <p class='productsDescription'>{{ $paragraph }}</p>
    @endforeach
</div>
@endsection('content')