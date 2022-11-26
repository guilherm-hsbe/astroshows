@extends('site.layout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" style="height:94.2vh">

    @foreach ($artistas as $artista)
    <div class="carousel-item active" data-interval="10000">
      <img class="d-block w-100" src="{{ asset($artista->imagem) }}" alt="">

      <div class="carousel-caption d-none d-md-block ">
          <h3>{{ $artista->nome_artistico }}</h3>
          <p>{{ $artista->descricao }}</p>
      </div>
    </div>
    @endforeach

  </div>

  <!-- Buttons -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
</div>

@endsection  