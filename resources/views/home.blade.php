@extends('app')
@section('content')
    <div class="">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active red">
                    <img class="slide-image third-slide" src="/img/img4.png">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Nuevo Fondo de Desarrollo Indigena</h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut earum facere, fuga
                                harum illo laborum laudantium neque officia optio voluptas voluptatum. Atque
                                exercitationem
                                odio vero. Dicta expedita molestias neque?</p>

                        </div>
                    </div>
                </div>
                <div class="item yellow">
                    <img class="slide-image  third-slide" src="/img/img1.png">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Título</h1>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                        </div>
                    </div>
                </div>
                <div class="item green">
                    <img class="slide-image  third-slide" src="/img/img2.png">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Título</h1>

                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel --></div>

@endsection