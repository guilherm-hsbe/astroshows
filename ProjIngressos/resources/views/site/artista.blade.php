@extends('site.layout')

@section('content')

<div class="card-group" style="background-color: black; opacity:0.9; padding:30px; border-radius:30px" >
  @foreach ($artistas as $artista)
    <div class="card">
      <img src="{{ asset($artista->imagem) }}" class="card-img-top" style="opacity:1.0 !important">
      <div class="card-body">
        <h5 class="card-title">{{ $artista->nome_artistico }}</h5>
        <p class="card-text">{{ $artista->descricao }}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ingressos disponíveis</small>
      </div>
    </div>
  @endforeach

  </div>

@endsection  