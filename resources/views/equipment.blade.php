@extends('layout')

@section('content')
<div class="container products" style="margin-top: 80px">
    <h2 class='productsHeader'>Оборудование</h2>
    <div class="carousel slide myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active equipment-slider-1">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item equipment-slider-2">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item equipment-slider-3">
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
    <p class='description'>Учитывая много летний опыт разведения кроликов, наше производство) отвечает всем требованиям в кролиководстве. Оборудование изготовленное на нашем предприятии обеспечивает весь цикл выращивания качественных лабораторных животных. Конструкция клетки проста в обслуживании. Все кормушки и сенницы для кормления кроликов регулярно обжигаются для дезинфекции. Система поения раздельная, мы используем как систему нипельного поения, так и обычные поплавкового типа, что позволяет круглый год обеспечивать поение животных. На все поилки установлена система подогрева в зимний период времени с возможностью дозирования витамин. Такая система позволяет регулировать всех витаминов необходимых для наших питомцев. Конструкция меточного ящика позволяет максимально приблизить условия гнезда и окрола к естественным. Выполнена из высококачественных естественных материалов. Эффективная вытяжка в хорошо проветриваемых помещениях обеспечивает хороший воздухобмен для животных, что хорошо влияет на плодовитость а так же на качество мяса и субпродуктов. Будем рады новому сотрудничеству! </p>
</div>
@endsection('content')