@extends('layout')

@section('content')
<div class="container certificates" style="margin-top: 80px">
    <h2 class='certificateHeader'>Наши сертификаты</h2>
    <div id="myCarousel" class="carousel slide myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div id='certificate1' class="carousel-item active certificate-slider-1">
                <div class="container">
                </div>
            </div>
            <div id='certificate2' class="carousel-item certificate-slider-2">
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
    <p class='description'>Мы выдаем сертификаты на всю нашу продукцию. Лицензирование производится по всем нормам и стандартам.</p>
</div>
@endsection('content')

@section('popUp')
 <div class="shim">
    <div id="certificatePhoto" class="carousel slide myCarousel" data-ride="carousel">
         <a href="#" class="myClose">X</a>
        <div class="carousel-inner">
            <div class="carousel-item certificateFull-slider-1">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item certificateFull-slider-2">
                <div class="container">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#certificatePhoto" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#certificatePhoto" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
      
</div>
<script src="js/certificatePopUp.js"></script>
@endsection('popUp')