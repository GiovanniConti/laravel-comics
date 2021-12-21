@extends('layouts.default')

@section('page_title', "Comics")

@section('content')

  <div class="container">
    <div class="row row-cols-1 row-cols-md-6 g-4">

      @foreach ($comics_list as $comic)
        <div class="col">
          @include('partials.card')
        </div>
      @endforeach
    </div>
  </div>

@endsection