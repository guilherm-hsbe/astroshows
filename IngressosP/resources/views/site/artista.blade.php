@extends('site.layout')

@section('content')

<?php if(count($artistas) == 0){ ?>
  <div class="empty w-100 text-center"  style="height:94.2vh">
    <h2><i class="bi bi-plug-fill"></i> Nada Por Aqui...</h2>
  </div>
  
<?php } else { ?>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" style="height:94.2vh">

    <?php $i = 0; ?>
    @foreach ($artistas as $artista)
    @if ($i == 0)
      <div class="carousel-item active" data-interval="10000">
      <?php $i++; ?>
    @else
      <div class="carousel-item" data-interval="10000">
    @endif
      <img class="d-block w-100" src="{{ asset($artista->imagem) }}" alt="">

      <div class="carousel-caption d-none d-md-block mb-2 dark-div p-2">
          <h2>{{ $artista->nome_artistico }}</h2>
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

<?php }; ?>

@endsection  