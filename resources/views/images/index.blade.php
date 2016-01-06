@extends('app')

@section('content')

    <div class="page-header">
        <h2>Galeria de fotos</h2>
    </div>
    @if(auth::guest())
    @else
        <div class="form-group">
            <a href="{{action('ImagesController@create')}}">
                <button type="button" class="btn btn-primary">
                    Añadir nueva imagen
                </button>
            </a>
        </div>
        <hr>
    @endif
    @if($images->isEmpty())
        <p>En un momento agregaremos nuevas imagenes.</p>
    @else
        <div class="row">
            @foreach($images as $picture)
                @include('images._image')
            @endforeach
        </div>
    @endif


@endsection