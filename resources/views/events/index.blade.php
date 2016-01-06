@extends('app')

@section('content')
    <div class="page-header">
        <h2>Eventos</h2>
    </div>
    @if(auth::guest())
    @else
        <div class="form-group">
            <a href="{{action('EventsController@create')}}">
                <button type="button" class="btn btn-primary">
                    Añadir nuevo evento
                </button>
            </a>
        </div>
        <hr>
    @endif
    @if($events->isEmpty())
        <p>En un momento agregaremos eventos.</p>
    @else
        <div class="row">
            @foreach($events as $event)
                @include('events._event')
            @endforeach
        </div>
    @endif
    <hr>

@endsection
