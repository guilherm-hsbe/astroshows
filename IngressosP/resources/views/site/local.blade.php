@extends('site.layout')

@section('content')

<div class="row img-locais m-0" style="height: 94.2vh;">
  <div class="col"></div>

  <div class="col-6">

  @foreach ($locais as $local)
    <div class="jumbotron shadow-lg bg-dark text-light p-5 mt-5">
      <h1 class="display-4">{{ asset($local->nLocal) }}</h1>
      <p class="lead">{{ asset($local->endereco) }}, {{ asset($local->bairro) }}, {{ asset($local->numero) }}.</p>
      <hr class="my-4">
      <p>{{ asset($local->cidade) }}, {{ asset($local->estado) }}, {{ asset($local->cep) }}.</p>
      
      <a class="btn btn-primary btn-lg" href="#" role="button">Botão</a>
    </div>
  @endforeach

  </div>

  <div class="col"></div>
</div>

@endsection