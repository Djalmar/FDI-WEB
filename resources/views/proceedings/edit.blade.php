@extends('app')

@section('content')
    {{!$save="Guardar cambios"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Editar <small>Acta</small></h2>
            </div>
            <p>Modifica el numero de acta y su descripción</p>
            <div>
                @include('errors.list')
                {!! Form::model($record,['action'=>['ProceedingsController@store',$project,$activity,$record],'class'=>'form','files'=>true]) !!}
                @include('proceedings.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection