@extends('app')

@section('content')
    {{!$save="Crear"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Crear <small>Acta</small></h2>
            </div>
            <p>Añade el numero de acta y su descripción</p>
            <div>
                @include('errors.list')
                {!! Form::open(['action'=>['ProceedingsController@store',$project,$activity],'class'=>'form','files'=>true]) !!}
                @include('proceedings.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection