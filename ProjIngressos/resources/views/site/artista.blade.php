@extends('site.layout')

@section('content')

<div style="padding-top:2rem; height:50%; background-color:black">
  <section id="slider" class="card-fit">
    <input type="radio" name="slider" id="s1" checked>
    <input type="radio" name="slider" id="s2">
    <input type="radio" name="slider" id="s3">
    

    <label for="s1" id="slide1">
      <img class="h-100" src="{{ asset('images/artistas/scott-min.jpg') }}" alt="First slide">
      <div class="text-img text-light">
        <h4>Travis Scott</h4>
        <p>Cantor de Rap</p>
      </div>
    </label>


    <label for="s2" id="slide2">
    <img class="h-100" src="{{ asset('images/artistas/lamar.jpg') }}" alt="Second slide">
      <div class="text-img text-light">
        <h4>Kendrick Lamar</h4>
        <p>Cantor de Rap</p>
      </div>
    </label>

    
    <label for="s3" id="slide3">
    <img class="h-100" src="{{ asset('images/artistas/skrillex.jpg') }}" alt="Third slide">
      <div class="text-img text-light">
        <h4>Skrillex</h4>
        <p>DJ</p>
      </div>
    </label>
  </section>
</div>

@endsection  