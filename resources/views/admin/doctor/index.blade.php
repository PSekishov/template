@extends('adminlte::page')

@section('content_header')
    <h1 class="text-center">Профессии нашей клиники</h1>
@stop

@section('content')
    <table class="table" id="tableDoctor">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя/Фамилия</th>
            <th>Профессия</th>
            <th>Изображение</th>
            <th>Email</th>
            <th>Ном.телефона</th>
            <th>Ном.кабинета</th>
            <th>О докторе</th>
            <th>Действия</th>
{{--            <th>Редакитировать</th>--}}
{{--            <th>Удалить</th>--}}
        </tr>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$doctor->nameDoc}} {{$doctor->surnameDoc}}</td>
                <td>{{$doctor->profession->prof}}</td>
                <td><img src="{{$doctor->imgPath}}" alt=" " class="img-responsive" style="width: 70px; height: 70px;"></td>
                <td>{{$doctor->email}}</td>
                <td>{{$doctor->tel}}</td>
                <td>{{$doctor->cabinet}}</td>
                <td>{!! $doctor->descDoc !!}</td>
                <td>
                    <a href="{{url('/admin/doctor/'.$doctor->id.'/edit')}}">Edit</a>
                    <a href="#" class="delete" data-id="{{$doctor->id}}">Delete</a>
                </td>
{{--                <td></td>--}}
            </tr>
        @endforeach
        </tbody>
        </thead>
    </table>
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('#tableDoctor').DataTable();

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
                    url:'/admin/doctor/'+ id,
                    type: 'delete',
                    success: function(){
                        elem.parents('tr').remove()
                    }

                });
            })

        }); // end jquery
    </script>
@stop
