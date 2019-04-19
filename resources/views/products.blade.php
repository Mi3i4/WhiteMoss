@extends('layout')

@section('content')
<div class="container products">
    <h2 class='productsHeader'>{{ $page['header'] }}</h2>
    @if ($page['haveSlider'] === "true")  
    <div id="myCarousel" class="carousel slide myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
        @foreach ($page['sliderPass'] as $i)
            <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" 
            @if ($loop->first === true)
                class="active"
            @endif
            ></li>
        @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($page['sliderPass'] as $img)
                <div class="carousel-item
                            @if ($loop->first === true)
                                active
                            @endif
                            productsSlider" style="background-image: url({{ $img }});">
                    <div class="container">
                    </div>
                </div>
            @endforeach
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
    @else
    <div class="productsSlider"  style="background-image: url({{ $page['sliderPass'][0] }});"></div>
    @endif
    
    @foreach ($page['description'] as $paragraph)
        @if (isset($paragraph['p']))
            <p class="productsDescription">{{ $paragraph['p'] }}</p>
        @endif
        @if (isset($paragraph['h3']))
            <h3 class='productsHeaderInDescription'>{{ $paragraph['h3'] }}</h3>
        @endif
        @if (isset($paragraph['h4']))
            <h4 class='productsHeaderInDescription'>{{ $paragraph['h4'] }}</h3>
        @endif
        @if (isset($paragraph['ul']))
            <ul class='productsUlInDescription'>
                @foreach ($paragraph['ul'] as $li)
                    <li>{{ $li }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
    
</div>
@endsection('content')