@extends('layouts.cab')

@section('content_cabinet')
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <h1>page my doctor </h1>
                <ul>
                    @foreach($professions as $profession)
                        <li>{{$profession->prof}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

@endsection