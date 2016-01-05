<div class="form-group">
    {!! Form::label('name','Nombre',['class'=>'col-md-4']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description','Descripción',['class'=>'col-md-4']) !!}
    <div class="col-md-6">
        {!! Form::text('description', null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('image','Imagen ',['class'=>'col-md-4']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null,['required','class'=>'form-control']) !!}
    </div>
    {{!$image_path = $picture != null ? '/img/photo_gallery/'.$picture->image_path:" " }}
    <img id="blah" src="{{$image_path}}" alt="" style="max-width: 400px" class="img-responsive"/>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function () {
        readURL(this);
    });
</script>
<br><br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{$save}}
        </button>
    </div>
</div>