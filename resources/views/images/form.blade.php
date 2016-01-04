<div class="form-group">
    {!! Form::label('name','Nombre',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description','Descripción',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('description', null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('image','Imagen ',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null,['required','class'=>'form-control']) !!}
    </div>
</div>
<br><br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{$save}}
        </button>
    </div>
</div>