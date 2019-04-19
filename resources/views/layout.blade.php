<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
          integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/my.css') }}">
     <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Белый Мох</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark suite_menu"> 
         <a href="{{ route('home') }}" class="logo logo-mobile link-home">
            <div>
                <img class="svg_center" src="/site_img/mylogo-min.png" width="60px">
            </div>
            <div>
                <h5>Питомник Белый мох</h5>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="{{ route('home') }}" class="logo logo-desctop link-home">
            <div>
                <img class="svg_center" src="/site_img/mylogo-min.png" width="60px">
            </div>
            <div>
                <h5>Питомник Белый мох</h5>
            </div>
        </a>
        <nav class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <div class="container_header">
                <ul class="navbar-nav">
                    <li class="nav-item nav-item-home" style="font-size: 18px">
                        <a style="margin-top: 4px" class="nav-link fa fa-home" href="/">
                        </a>
                    </li>
                    <li class="nav-item nav-item-about">
                        <a class="nav-link" href="{{ route('about') }}">О нас</a>
                    </li>
                    <li class="nav-item dropdown nav-item-products">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Продукция
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/products/animals">Животные</a>
                            <a class="dropdown-item" href="/products/fertilizer">Биоудобрения</a>
                            <a class="dropdown-item" href="/products/fodder">Комбикорм</a>
                            <a class="dropdown-item" href="/products/disinfectors">Дезинфекторы</a>
                            {{--<a class="dropdown-item" href="/products/equipment">Оборудование</a>--}}
                        </div>
                    </li>
                    <li class="nav-item nav-item-contacts">
                        <a class="nav-link" href="{{ route('contacts') }}">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="address">
            <h7>Позвоните нам:</h7><br>

            <a href="tel:{{ $header_footer['header']['tel'][0] }}">{{ $header_footer['header']['tel'][0] }}</a><br>
            <a href="tel:{{ $header_footer['header']['tel'][1] }}">{{ $header_footer['header']['tel'][1] }}</a>
        </div>
        <div class="address">
            <h7>Напишите нам:</h7><br>
            <a href="mailto:{{ $header_footer['header']['email'][0] }}">{{ $header_footer['header']['email'][0] }}</a><br>
            <a href="mailto:{{ $header_footer['header']['email'][1] }}">{{ $header_footer['header']['email'][1] }}</a>
        </div>
    </nav>
</header>
<main role="main">

    @yield('content')

</main>


<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">{{ $header_footer['footer']['text'] }}</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/js/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    @yield('recaptcha')
    @yield('popUp')
</body>
      
</html>