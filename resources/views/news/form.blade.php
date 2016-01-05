<div class="form-group">
    {!! Form::label('title','Titulo',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('body','Contenido',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('body', null,['class'=>'form-control','name'=>'body']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('published','Fecha de publicación',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('date','published', null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('expiration','Fecha de expiración',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('date','expiration', null,['class'=>'form-control']) !!}
    </div>
</div>
<script>
    CKEDITOR.config.toolbar = [
        ['Styles', 'Format', 'Font', 'FontSize'],
        '/',
        ['Bold', 'Italic', 'Underline', 'StrikeThrough', '-', 'Outdent', 'Indent', '-', 'NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
    ];
    CKEDITOR.replace('body', {});
</script>
<br><br>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{$save}}
        </button>
    </div>
</div>