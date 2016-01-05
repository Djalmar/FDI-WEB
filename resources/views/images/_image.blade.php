<div class="col-sm-6 col-md-4">
    <a href="{{action('ImagesController@show',$picture)}}" >
        <div class="thumbnail">
            <img style="max-height:300px " src="/img/photo_gallery/{{$picture->image_path}}">
            <div class="caption">
                <h3>{{$picture->name}}</h3>
                <p>{{$picture->description}}</p>
            </div>
        </div>
    </a>
</div>