@extends('layouts.cab')


@section('content_header')
    <h1 class="text-center">Личный кабинет</h1>
@stop

@section('content')
 <section class="professions">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

   <h1>page cabinet</h1>

      <ul class="nav nav-tabs" id="myTab" role="tablist">
         {{--    В этом цикле можно использовать $profession->prof вместо  $profession->slug (это усли надо работать с id) просто slug возращает латиницу. Но как по мне ловить динамический и редактированый id глупо :) --}}
         @foreach($professionsShare as $profession)
             @if($loop->first)
              <li class="nav-item">
                <a class="nav-link active" id="{{$profession->slug}}-tab" data-toggle="tab" href="#{{$profession->slug}}" role="tab" aria-controls="{{$profession->slug}}" aria-selected="true">{{$profession->prof}}</a>
              </li>
              @else
                 <li class="nav-item">
                     <a class="nav-link" id="{{$profession->slug}}-tab" data-toggle="tab" href="#{{$profession->slug}}" role="tab" aria-controls="{{$profession->slug}}" aria-selected="false">{{$profession->prof}}</a>
                 </li>
                 @endif
          @endforeach
      </ul>

      <div class="tab-content" id="myTabContent">
          @foreach($professionsShare as $profession)
              @if($loop->first)
                  <div class="tab-pane fade show active" id="{{$profession->slug}}" role="tabpanel" aria-labelledby="{{$profession->slug}}-tab">{{$profession->descProf}}</div>
              @else
                  <div class="tab-pane fade" id="{{$profession->slug}}" role="tabpanel" aria-labelledby="{{$profession->slug}}-tab">{{$profession->descProf}}</div>
              @endif
          @endforeach
      </div>

@stop



            </div>
        </div>
    </div>
 </section>