@extends('app')

@section('content')
    <div class="page-header">
        <h2>Acta {{$record->number}}
            <small>{{$record -> description}}</small>
        </h2>
    </div>
    <a href="{{action('ProceedingsController@edit',array($project, $activity,$record))}}">
        <button type="button" class="btn btn-primary">
            Editar acta
        </button>
    </a>
    <hr>
    @if($record->recordImages->isEmpty())
        <p>Añade las imagenes del acta.</p>
    @else
        <h2>
            <small>Imagenes del acta</small>
        </h2>
        <ul class="list-group">
            @foreach($record->recordImages as $recordImage)
                <li class="list-group-item">
                    @include('proceedings._recordImage')
                </li>
            @endforeach
        </ul>
    @endif
    <div>
        <a href="{{action('RecordImagesController@create',array($project,$activity,$record))}}">
            <button type="button" class="btn btn-success">
                Añadir nueva imagen
            </button>
        </a>
    </div>
    <hr>
@endsection