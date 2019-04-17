@extends('layout')

@section('content')
<div class="container certificates" style="margin-top: 80px">
    <h2 class='certificateHeader'>Наши сертификаты</h2>
        <div class="certificate-wrapr row">
            <div class="col-md-6 col-sm-12">
                <img  id='certificate1' class="certificate-img"  src="{{ $page['sliderPass'][0] }}">
            </div>
            <div class="col-md-6 col-sm-12">
                <img  id='certificate2' class="certificate-img" src="{{ $page['sliderPass'][1] }}">
            </div>
        </div>
    <p class='exhibitionDescription'>{{ $page['description'] }}</p>
</div>
@endsection('content')

@section('popUp')
 <div class="shim">
     
    <div class="certificateFull-img certificateFull-1"  style="background-image: url({{ $page['sliderPass'][0] }});">
        <div class="myClose">X</div>
     </div>
    <div class="certificateFull-img certificateFull-2"  style="background-image: url({{ $page['sliderPass'][1] }});">
        <div class="myClose">X</div>
     </div> 
</div>
<script src="js/certificatePopUp.js"></script>
@endsection('popUp')