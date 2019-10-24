
<div class="form-group">
    {!! Form::label('nameDoc','Имя дoктора') !!}
    {!! Form::text('nameDoc',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('surnameDoc','Фамилия дoктора') !!}
    {!! Form::text('surnameDoc',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug','Слаг') !!}
    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('profession_id','Професия доктора') !!}
    {!! Form::select('profession_id',$profession_id,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Електронная почта') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tel','Номер телефона доктора') !!}
    {!! Form::text('tel',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cabinet','Номер рабочего кабинета') !!}
    {!! Form::text('cabinet',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descDoc','Краткая  информация о докторе') !!}
    {!! Form::textarea('descDoc',null,['class'=>'form-control']) !!}
</div>



<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Заменить
     </a>
   </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$doctor->imgPath or ''}}">
</div>

<img id="holder" style="margin-top:15px;max-height:100px;" src="{{$doctor->imgPath or ''}}">
<br>
<br>

{!! Form::submit('Сохранить',['class'=>'btn btn-primary']) !!}
