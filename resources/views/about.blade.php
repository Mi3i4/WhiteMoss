@extends('layout')

@section('content')
<div class="container about" style="margin-top: 80px">
    <h2 class='aboutHeader'>{{ $page['header'] }}</h2>
    <img class="svg_center"  src="/site_img/mylogo-min.png" alt="logo" width="220px">

     @foreach ($page['description'] as $paragraph)
        <p class='productsDescription'>{{ $paragraph }}</p>
     @endforeach
</div>
@endsection('content')