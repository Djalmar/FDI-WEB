<div class="col-md-4 ">
    <div class="panel panel-success">
        <div class="panel-heading">
            <a href="{{action('EventsController@show',[$event])}}">
                <h2 class="panel-title">{{$event->title}}  </h2>
            </a>
            <h3>
                <small>El evento se realizara el <span class="label label-danger">{{$event->execute}}</span></small>
            </h3>
        </div>
    </div>
</div>

