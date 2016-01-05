@extends('app')

@section('content')
    <div class="page-header">
        <h2>
            Imagen
            <small> {{$picture -> name}}</small>
        </h2>
    </div>
    {!! $picture->description !!}
    <div>
        <img src="/img/photo_gallery/{{$picture->image_path}}" class="img-responsive" style="max-height: 600px" alt="">
    </div>
    <hr>
    @if(auth::guest())
    @else
        <div class="form-group">
            <a href="{{action('ImagesController@edit',$picture)}}">
                <button type="button" class="btn btn-primary">
                    Editar imagen
                </button>
            </a>
        </div>
        <div class="form-group">
            {!! Form::open(['method' => 'DELETE','route' => ['images.destroy', $picture]]) !!}
            {!! Form::submit('Eliminar esta imagen?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    @endif
@endsection