<div class="col-md-4 ">
    <div class="panel panel-info">
        <div class="panel-heading">
            <a href="{{action('NewsController@show',[$notice])}}">
                <h1 class="panel-title">{{$notice->title}}  </h1>
            </a>
            <h3>
                <small>Publicado el <span class="label label-primary">{{$notice->published}}</span></small>
            </h3>
        </div>
    </div>
</div>

