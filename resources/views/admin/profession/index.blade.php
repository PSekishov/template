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
          <td><a href="{{url('/admin/profession/'.$profession->id.'/edit')}}">Edit</a></td>
          <td><a href="#" class="delete" data-id="{{$profession->id}}">delete</a></td>
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

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#tableProfession').on('click','.delete',function(e){
                e.preventDefault();
                let id = $(this).attr('data-id');
                let elem = $(this);

                $.ajax({
                    url:'/admin/profession/'+ id,
                    type: 'delete',
                    success: function(){
                        elem.parents('tr').remove()
                    }

                });
            })

        }); // end jquery
    </script>
@stop