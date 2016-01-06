@extends('app')

@section('content')
    <div class="page-header">
        <h2>Noticias</h2>
    </div>
    @if(auth::guest())
    @else
        <div class="form-group">
            <a href="{{action('NewsController@create')}}">
                <button type="button" class="btn btn-primary">
                    Añadir nueva noticia
                </button>
            </a>
        </div>
        <hr>
    @endif
    @if($notices->isEmpty())
        <p>En un momento agregaremos noticias.</p>
    @else
        <div class="row">
            @foreach($notices as $notice)
                @include('news._new')
            @endforeach
        </div>
    @endif
    <hr>

@endsection