@extends('site.layout')

@section('content')

@if (!empty($locais))
  <div class="empty w-100 text-center"  style="height:94.2vh">
    <h2><i class="bi bi-plug-fill"></i> Nada Por Aqui...</h2>
  </div>
  
@else
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
      <hr class="featurette-divider">
    @endforeach

  </div>

  <div class="col"></div>
</div>

@endif

@endsection