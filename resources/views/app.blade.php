<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FDI</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/js/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img class="" alt="Brand" src="/img/escudo-logo.png">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/">Inicio</a></li>
                <li><a href="/organization">Organización</a></li>
                <li><a href="/news">Noticias</a></li>
                <li><a href="/events">Eventos</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Iniciar sesión</a></li>
                    <li><a href="{{ url('/auth/register') }}">Registrar</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Cerrar sesión</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li>
                    {!! Form::open(['method'=>'GET','url'=>'searches'])  !!}
                    <div class="input-group">
                        <input name="searchText" type="text" class="form-control" placeholder="Buscar...">
                        <span class="input-group-btn"><button class="btn btn-default" type="submit"><span
                                        class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>
                    {!! Form::close() !!}
                </li>
                <li><a href="/images">Galeria de Fotos</a></li>
                <li><a href="/contactUs">Contactanos</a></li>
                <li><a href="/structure">Estructura institucional</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @if(Session::has('flash_message'))
                <div class="alert alert-danger">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>


</body>
</html>