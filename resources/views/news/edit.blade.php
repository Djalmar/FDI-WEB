@extends('app')

@section('content')
    {{!$save="Guardar cambios"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Editar
                    <small>Noticia</small>
                </h2>
            </div>
            <p>Edita la noticia </p>

            <div>
                @include('errors.list')
                {!! Form::model($notice,['method'=>'PATCH','action'=>['NewsController@update',$notice],'class'=>'form','name'=>'editor1','files'=>true]) !!}
                @include('news.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection