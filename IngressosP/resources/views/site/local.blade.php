@extends('site.layout')

@section('content')

<div class="row img-locais m-0" style="height: 94.2vh;">
  <div class="col"></div>

  <div class="col-6">

    @foreach ($locais as $local)
      <div class="featurette mb-5 shadow-lg div-local p-5 mt-5">
        <div class="">
            <h1 class="featurette-heading"><i class="bi bi-building"></i> {{ asset($local->nLocal) }}</h1>
            <h4>{{ asset($local->endereco) }}, {{ asset($local->bairro) }}, {{ asset($local->numero) }}</h4>

            <hr class="my-4 bg-light">

            <p class="lead">{{ asset($local->cidade) }}</p>
            <p class="lead">{{ asset($local->estado) }}</p>
            <p class="lead">{{ asset($local->cep) }}</p>
        </div>
      </div>
      <hr class="featurette-divider">
    @endforeach

  </div>

  <div class="col"></div>
</div>

@endsection