<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
          integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark suite_menu">
        <div class="logo">
            <div>
                <object class="svg_center" type="image/svg+xml" data="/site_img/logoNormal.svg" width="70px">
                    <img src="/site_img/logoNormal.svg" class="mr-3" alt="logo">
                </object>
            </div>
            <div>
                <h5>Питомник Белый мох</h5>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <nav class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <div class="container_header">
                <ul class="navbar-nav">
                    <li class="nav-item" style="font-size: 18px">
                        <a style="margin-top: 4px" class="nav-link fa fa-home" href="/"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О нас</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Продукция
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Животные</a>
                            <a class="dropdown-item" href="#">Биоудобрения</a>
                            <a class="dropdown-item" href="#">Комбикорм</a>
                            <a class="dropdown-item" href="#">Обезжириватели</a>
                            <a class="dropdown-item" href="#">Оборудование</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="address">
            <h7>Позвоните нам:</h7><br>

            <a href="+7 (49643)-31-692"> +7 (49643)-31-692</a><br>
            <a href="+7 (49643)-31-939"> +7 (49643)-31-939</a>
        </div>
        <div class="address">
            <h7>Напишите нам:</h7><br>
            <a href="mailto:bel.mox@mail.ru">bel.mox@mail.ru</a><br>
            <a href="mailto:belmox@mail.ru">belmox@mail.ru</a>
        </div>
    </nav>

</header>

<main role="main">

    @yield('content')

</main>


<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">© 2018 ФГБУН НЦБМТ ФМБА России Филиал «Электрогорский» Питомник Белый мох.</span>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>