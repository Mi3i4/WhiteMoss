@extends('layout')

@section('content')
<div class="container contacts" style="margin-top: 80px">
    <h2 class='contactsHeader'>Контакты</h2>
    <h6 class='contactsHeader2'>Если у Вас есть вопросы или предложения, то Вы можете задать их по телефону, отправить сообщение или приехать к нам. </h6>
    
    <hr class="featurette-divider">
    
     <form class="form-group address" role="form">
         <h2 id="address">Адрес</h2>
            <label for="address">142530, Московская обл., Павлово-Посадский р-н, г. Электрогорск, пр. Мечникова, д. 2</label>
            <label><b>Телефоны</b></label>
            <label><span id="contact-mail">+7 (49643)-32-132 +7 (49643)-31-692 +7 (49643)-31-939</span></label>
            <label><b>Почта</b> <span id="contact-mail"> bel.mox@mail.ru belmox@mail.ru</span></label>
    </form>
    
    <hr class="featurette-divider">
     
    <form action="/contactUs" method="post" role="form">
        <h2 id="message">Сообщение</h2>
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
        <h2 id="map">Карта</h2>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A69e9466c04758397e7d98188dfa72b5dce89bb5f434e97bc5cca8ba816b71060&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>
</div>
@endsection('content')