@extends('app')

@section('content')
    {{!$save="Crear imagen"}}
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
                <h2>Crear
                    <small>Imagen</small>
                </h2>
            </div>
            <p>Añade una nueva imagen para la galeria</p>
            <div>
                @include('errors.list')
                {!! Form::open(['action'=>['ImagesController@store'],'class'=>'form ','files'=>true]) !!}
                @include('images.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection