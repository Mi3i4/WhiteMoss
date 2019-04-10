@extends('layout')

@section('content')
<div class="container about" style="margin-top: 80px">
    <h2 class='aboutHeader'>{{ $page['header'] }}</h2>
    <object class="svg_center" type="image/svg+xml" data="/site_img/logoNormal.svg" width="250px">
                    <img src="{{ $page['img'] }}" class="mr-3" alt="logo">
    </object>

     @foreach ($page['description'] as $paragraph)
        <p class='productsDescription'>{{ $paragraph }}</p>
     @endforeach
</div>
@endsection('content')