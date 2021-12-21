@extends('layouts.default')

{{-- sostituisce il placeholder nel titolo dell'head --}}
@section('page_title', "Homepage Comics")

{{-- Sostituisce il placeholder nel main --}}
@section('content')
  
  <div class="container">
    <div class="row row-cols-1 row-cols-md-6 g-4"> 
      
      {{-- Ciclo foreach per stampare tutte le card --}}
      @foreach ($comics_list as $comic)
      <div class="col">
        @include('partials.card')
      </div>
      @endforeach

    </div>
  </div>
@endsection