@extends('layout')

@section('content')
<div class="container products" style="margin-top: 80px">
    <h2 class='animalsHeader'>Лабораторные животные</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active animal-slider-1">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item animal-slider-2">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item animal-slider-3">
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
    <p class='animalDescription'>Мы занимается выращиванием кроликов породы «Советская Шиншилла» более 47-ти лет. Питомник находится в экологически чистом районе Московской области здесь среди наших полей и озер содержатся наши лабораторные животные. Технология применяемая на ферме "Метод внутреннего содержания в больших ангарах». При присмотре ведущих животноводов и ветеринаров. Наши животные не получают антибиотиков и являются абсолютно экологически чистыми. Главным требованием к лабораторным кроликам является их полноценное здоровье. Животные не должны иметь каких-либо патологий, болезней и носителей вредных микробов. Наша задача чтобы в научные лаборатории попадали только здоровые животные, их выращивают у нас на территории в специализированных питомниках. Кроликам создают все необходимые условия для жизни, обеспечивают правильным питанием исходя из потребностей и необходимостей эксперимента. Если обратиться заранее мы можем вырастить животное в точности необходимое для эксперимента. В нашем питомнике у кроликов происходит интенсивное содержание. Мы очень тщательно следим что бы в нашем стаде не возникали различные инфекционные, паразитарные заболевания. В связи, с этим постоянно проводится работа нашими ветеринарами по улучшению лабораторного вида животного. Современная наука не стоит на месте и мы стараемся не отставать от тенденций в научной сфере. Технологии позволяют получать лабораторных животных, которые будут обладать новыми свойствами (например не восприимчивыми в гепатиту В), что позволит их использовать в научных исследованиях. </p>
</div>
@endsection('content')