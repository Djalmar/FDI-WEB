@extends('app')

@section('content')
    {{!$save="Crear"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Crear <small>Evento</small></h2>
            </div>
            <p>Crea una evento para el portal web</p>
            <div>
                @include('errors.list')
                {!! Form::open(['action'=>['EventsController@store'],'class'=>'form','name'=>'editor1','files'=>true]) !!}
                @include('events.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection