<div class="media">
    <div class="media-body">
        <a href="{{action('ProceedingsController@show',[$project,$activity,$record])}}">
            <h4 class="media-heading">
                <small>Numero de acta</small> {!! $record -> number !!}
            </h4>
        </a>
        <p>
            {{$record->description}}
        </p>
    </div>
</div>