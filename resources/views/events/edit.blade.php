@extends('app')

@section('content')
    {{!$save="Guardar cambios"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Editar
                    <small>Evento</small>
                </h2>
            </div>
            <p>Edita el evento</p>

            <div>
                @include('errors.list')
                {!! Form::model($event,['method'=>'PATCH','action'=>['EventsController@update',$event],'class'=>'form','name'=>'editor1','files'=>true]) !!}
                @include('events.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection