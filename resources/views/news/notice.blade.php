@extends('app')

@section('content')
    <div class="page-header">
        <h2>
            <small>{{$notice -> title}}</small>
        </h2>
        <h3>
            <small>Publicado desde el <span class="label label-primary">{{$notice->published}}</span></small>
            <small>hasta el <span class="label label-danger">{{$notice->expiration}}</span></small>
        </h3>
    </div>
    {!! $notice->body !!}
    <hr>
    @if(auth::guest())
    @else
        <div class="form-group">
            <a href="{{action('NewsController@edit',$notice)}}">
                <button type="button" class="btn btn-primary">
                    Editar noticia
                </button>
            </a>
        </div>
        <div class="form-group">
            {!! Form::open(['method' => 'DELETE','route' => ['news.destroy', $notice]]) !!}
            {!! Form::submit('Eliminar esta noticia?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    @endif

@endsection