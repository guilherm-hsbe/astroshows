@extends('site.layout')

@section('content')

<?php if(count($locais) == 0){ ?>
  <div class="empty w-100 text-center"  style="height:94.2vh">
    <h2><i class="bi bi-plug-fill"></i> Nada Por Aqui...</h2>
  </div>
  
<?php } else { ?>
<div class="row img-locais m-0" style="height: 94.2vh;">
  <div class="col"></div>

  <div class="col-6">

    @foreach ($locais as $local)
      <div class="featurette mb-5 shadow-lg div-local p-5 mt-5">
        <div class="">
            <h1 class="featurette-heading"><i class="bi bi-building"></i> {{ $local->nLocal }}</h1>
            <h4>{{ $local->endereco }}, {{ $local->bairro }}, {{ $local->numero }}</h4>

            <hr class="my-4 bg-light">

            <p class="lead">{{ $local->cidade  }} - {{ $local->estado }}</p>
            <!-- <p class="lead"></p> -->
            <p class="lead">{{ $local->cep }}</p>
        </div>
      </div>
      <!-- <hr class="featurette-divider"> -->
    @endforeach

    <div class="card mb-3">
  <img src="https://brandnews.com.br/images/noticias/5007/25040708_Montagem_d.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>


  </div>

  

  <div class="col"></div>
</div>

<?php }; ?>

@endsection