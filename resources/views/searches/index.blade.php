@extends('app')

@section('content')

    <div class="page-header">
        <h2>Busqueda</h2>
    </div>
    @if(!$news->isEmpty())
        <h3>Noticias</h3>
        <div class="row">
            @foreach($news as $notice)
                @include('news._new')
            @endforeach
        </div>
    @endif
    @if(!$events->isEmpty())
        <h3>Eventos</h3>
        <div class="row">
            @foreach($events as $event)
                @include('events._event')
            @endforeach
        </div>
    @endif
    @if(!$images->isEmpty())
        <h3>Galeria de Fotos</h3>
        <div class="row">
            @foreach($images as $picture)
                @include('images._image')
            @endforeach
        </div>
    @endif
@endsection