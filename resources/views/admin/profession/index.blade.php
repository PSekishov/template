@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">Профессии нашей клиники</h1>
@stop

@section('content')
  <table class="table" id="tableProfession">
      <thead>
      <tr>
          <th>ID</th>
          <th>Изображение</th>
          <th>Професия</th>
          <th>Описание профессии</th>
          <th>Редактировать</th>
          <th>Удалить</th>
      </tr>
      <tbody>
      @foreach($professions as $profession)
      <tr>
          <td>{{$loop->iteration}}</td>
          <td><img src="{{$profession->imgPath}}" alt=" " class="img-responsive" style="width: 100px; height: 100px;"></td>
          <td>{{$profession->prof}}</td>
          <td>{{$profession->descProf}}</td>
          <td>edit</td>
          <td>delete</td>
      </tr>
       @endforeach
      </tbody>
      </thead>
  </table>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('#tableProfession').DataTable();
        }); // end jquery
    </script>
@stop