@extends('site.layout')

@section('content')

<?php if(count($shows) == 0){ ?>
  <div class="empty w-100 text-center"  style="height:94.2vh">
    <h2><i class="bi bi-plug-fill"></i> Nada Por Aqui...</h2>
  </div>
  
<?php } else { ?>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" style="height:94.2vh">

    <?php $i = 0; ?>
    @foreach ($shows as $show)
    @if ($i == 0)
      <div class="carousel-item active" data-interval="10000">
      <?php $i++; ?>
    @else
      <div class="carousel-item" data-interval="10000">
    @endif
      <img class="d-block w-100" src="{{ asset($show->imagem) }}" alt="">

      <div class="carousel-caption d-none d-md-block mb-2 dark-div p-2">
          <h2>{{ $show->nome}}</h2>
          <p>{{ $show->descricao }}</p>

          <a class="btn text-light border-0" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <h4 class="bi bi-arrow-bar-down"></h4>
          </a>
          <div class="collapse div-coll" id="collapseExample">
            <div class="bg-transparent card border-0">
              <div class="mb-2">
                <h5>Data</h5>
                <p>{{ $show->data }}</p>
              </div>

              <div class="mb-2">
                <h5>Horário</h5>
                <p>{{ $show->horario_i }} - {{ $show->horario_f }}</p>
              </div>

              <div class="mb-2">
                <h5>Quantidade de Ingressos</h5>
                <p>{{ $show->qtd_ingressos }}</p>
              </div>

              @if(session('msg'))
                <p class="msg bg-transparent" style="border-radius: 8px;">{{ session('msg') }}</p>
                <p></p>
              @endif
              <form method="post">
                @csrf
                <button type="submit" class="btn btn-outline-light mt-2" value="Enviar">Comprar</button>
              </form>
            </div>
          </div>

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