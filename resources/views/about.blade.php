@extends('layout')

@section('content')
<div class="container about" style="margin-top: 80px">
    <h2 class='aboutHeader'>{{ $page['header'] }}</h2>
    <img class="svg_center"  src="/site_img/mylogo-min.png" alt="logo" width="220px">

    @foreach ($page['description'] as $paragraph)
        @if (isset($paragraph['p']))
            <p class="productsDescription">{{ $paragraph['p'] }}</p>
        @elseif (isset($paragraph['h3']))
            <h3 class='productsHeaderInDescription'>{{ $paragraph['h3'] }}</h3>
        @elseif (isset($paragraph['ol']))
            <ol class='productsUlInDescription'>
                @foreach ($paragraph['ol'] as $li)
                    <li>{{ $li }}</li>
                @endforeach
            </ol>
        @elseif (isset($paragraph['ul']))
            <ul class='productsUlInDescription'>
                @foreach ($paragraph['ul'] as $li)
                    <li>{{ $li }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach

</div>
@endsection('content')