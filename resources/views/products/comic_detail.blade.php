@extends('layouts.default')

@section('page_title', $comic['series'])

@section('content')
  <div class="container">
    {{-- HERO SECTION --}}
    <section class="hero">
      <div class="hero-container container">
        <img class="" src="{{$comic['thumb']}}" alt="">
      </div>

    </section>
    {{-- SECTION DESCRIPTION --}}
    <section class="description_adv">
      <div class="description_container">
        <h1 class="comic_title">{{$comic['title']}}</h1>
        <div class="comic_price_container">
          <h3 class="comic_price">U.S. Price: {{$comic['price']}}</h3>
        </div>
        <p class="comic_description">{{$comic['description']}}</p>
      </div>
      <div class="adv_container">
        <h5>ADVERTISEMENT</h5>
        <img src="" alt="advert">
      </div>
    </section>
    {{-- SECTION TALENT-SPECS --}}
    <section class="talent_specs">
      <div class="talent_specs_container container">
        {{-- LIST TALENT --}}
        <ul class="talent">
          <li>
            <h4 class="talent_specs-title">Talent</h4>
          </li>
          <li>
            <h5 class="talent_specs-sub_el">Art by:</h5>
            <span class="talent_specs-sub_el">
              {{-- ciclo per stampare tutti gli artisti dall'array $comic['artists'] --}}
            </span>
          </li>
          <li>
            <h5 class="talent_specs-sub_el">Written by:</h5>
            <span class="talent_specs-sub_el">
              {{-- ciclo per stampare tutti gli scrittori dall'array $comic['writers'] --}}
            </span>
          </li>
        </ul>
        {{-- LIST SPECS --}}
        <ul class="specs">
          <li>
            <h4 class="talent_specs-title">Specs</h4>
          </li>
          <li>
            <h5 class="talent_specs-sub_el">Series:</h5>
            <a href="" class="talent_specs-sub_el"></a>
          </li>
          <li>
            <h5 class="talent_specs-sub_el">U.S. Price:</h5>
            <a href="" class="talent_specs-sub_el"></a>
          </li>
          <li>
            <h5 class="talent_specs-sub_el">On Sale Date:</h5>
            <a href="" class="talent_specs-sub_el"></a>
          </li>
        </ul>
      </div>
      <div class="talent_specs_footer">
        <div class="container">

        </div>
      </div>
    </section>
  </div>
@endsection