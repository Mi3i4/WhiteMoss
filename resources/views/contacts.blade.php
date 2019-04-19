@extends('layout')

@section('content')
<div class="container contacts" style="margin-top: 80px">
    <h3 class='contactsHeader'>{{ $page['header'] }}</h3>
    <h6 class='contactsHeader2'>{{ $page['header2'] }}</h6>
    
    <hr class="featurette-divider">
    
     <form class="form-group address" role="form">
            <h3 id="address">Адрес</h3>
            <label for="address">{{ $page['address'] }}</label>
            <label class="telephoneHeader"><b>Телефоны</b></label>
            <span class="contact-mail"></span> 
            <a href="tel:{{ $header_footer['header']['tel'][0] }}" class="contact-mail">{{ $header_footer['header']['tel'][0] }}</a>
            <a href="tel:{{ $header_footer['header']['tel'][1] }}" class="contact-mail">{{ $header_footer['header']['tel'][1] }}</a><br>
            <label  class="telephoneHeader"><b>Почта </b></label>
            <span class="contact-mail"></span>  
            <a class="contact-mail" href="mailto:{{ $header_footer['header']['tel'][0] }}" id="contact-mail">
                {{ $header_footer['header']['email'][0] }}
            </a>
            <a class="contact-mail" href="mailto:{{ $header_footer['header']['tel'][1] }}" id="contact-mail">
                 {{ $header_footer['header']['email'][1] }}
            </a>
    </form>
    
    <hr class="featurette-divider">
     
    <form action="/contactUs" method="post" role="form">
        <h3 id="message">Сообщение</h3>
        @csrf
        <div class="form-group">
            <label for="name"><b>Имя</b></label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            @if($errors->has('name'))  <small class="validate-error">{{ $errors->first('name') }}</small> @endif
        </div>
        <div class="form-group">
            <label for="email"><b>Электронная почта</b></label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @if($errors->has('email'))  <small class="validate-error">{{ $errors->first('email') }}</small> @endif
        </div>
        <div class="form-group">
            <label for="text"><b>Текст сообщения</b></label>
            <textarea class="form-control" id="text" name="text" rows="6">{{ old('text') }}</textarea>
            @if($errors->has('text'))  <small class="validate-error">{{ $errors->first('text') }}</small> @endif
        </div>
         <div class="form-group row" id="captcha-wrap">
             <img src="{{ captcha_src('flat') }}" alt="captcha" class="captcha-img" data-refresh-config="flat">
             <a class="captcha-refresh" href="#" id="refresh"><img src="{{ asset('site_img/captcha_refresh.png') }}"  class="captcha-refresh"></a>
             <div class="form-group col-sm-12 col-md-4 captcha-input">
                <label><b>Подтверждение</b></label>
                <input class="form-control" type="text" name="captcha"/>
                @if($errors->has('captcha'))  <small class="validate-error">{{ $errors->first('captcha') }}</small> @endif
             </div>
        </div>
        <div class="form-group form-btn">
          <button type="submit" class="btn btn-submit">Отправить</button>
        </div>    
    </form>
    
    <hr class="featurette-divider">
    
    <div role="form">
        <h3 id="map">Карта</h3>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A69e9466c04758397e7d98188dfa72b5dce89bb5f434e97bc5cca8ba816b71060&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>
</div>
@endsection('content')

@section('recaptcha')
<script>
    $('#refresh').on('click',function(){
        var captcha = $('img.captcha-img');
        var config = captcha.data('refresh-config');
        $.ajax({
            method: 'GET',
            url: '/get_captcha/' + config,
        }).done(function (response) {
            captcha.prop('src', response);
            console.log(response);
        });
    });
</script>
@endsection('recaptcha')