@extends('app')

@section('content')
    {{!$save="Guardar cambios"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Editar
                    <small> Imagen</small>
                </h2>
            </div>
            <p>Cambia la imagen de la galeria</p>

            <div>
                @include('errors.list')
                {!! Form::model($picture,['method'=>'PATCH','action'=>['ImagesController@update',$picture],'class'=>'form','files'=>true]) !!}
                @include('images.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection