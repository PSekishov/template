
<div class="form-group">
    {!! Form::label('prof','Профессия') !!}
    {!! Form::text('prof',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug','Слаг') !!}
    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descProf','Описание профессии') !!}
    {!! Form::textarea('descProf',null,['class'=>'form-control']) !!}
</div>

<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Заменить
     </a>
   </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$profession->imgPath or ''}}">
</div>

<img id="holder" style="margin-top:15px;max-height:100px;" src="{{$profession->imgPath or ''}}">
<br>
<br>

{!! Form::submit('Создать',['class'=>'btn btn-primary']) !!}