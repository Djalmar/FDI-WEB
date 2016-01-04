@extends('app')

@section('content')
    <div class="page-header">
        <h2>
            <small>{{$event -> title}}</small>
        </h2>
        <h3>
            <small>Fecha del evento <span class="label label-primary">{{$event->published}}</span></small>
        </h3>
    </div>
    {!! $event->body !!}
    <hr>
    @if(auth::guest())
    @else
        <div class="form-group">
            <a href="{{action('EventsController@edit',$event)}}">
                <button type="button" class="btn btn-primary">
                    Editar evento
                </button>
            </a>
        </div>
        <div class="form-group">
            {!! Form::open(['method' => 'DELETE','route' => ['events.destroy', $event]]) !!}
            {!! Form::submit('Eliminar este evento?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    @endif

@endsection