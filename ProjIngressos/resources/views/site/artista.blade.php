@extends('site.layout')

@section('content')

<div class="card-group" >
    <div class="card">
      <img src="{{ asset('images/artistas/scott-min.jpg') }}" class="card-img-top" style="opacity:1.0 !important">
      <div class="card-body">
        <h5 class="card-title">Travis Scott</h5>
        <p class="card-text">Jacques Berman Webster II, mais conhecido por seu nome artístico Travis Scott, 
          é um rapper, cantor, compositor e produtor musical norte-americano.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ingressos disponíveis</small>
      </div>
    </div>
    <div class="card">
      <img src="{{ asset('images/artistas/skrillex.jpg') }}" class="card-img-top" style="opacity:1.0 !important">
      <div class="card-body">
        <h5 class="card-title">Skrillex</h5>
        <p class="card-text">Sonny John Moore, mais conhecido como Skrillex, é um premiado produtor musical, 
          cantor e compositor norte americano de música eletrônica. </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ingressos disponíveis</small>
      </div>
    </div>
    <div class="card">
      <img src="{{ asset('images/artistas/lamar.jpg') }}" class="card-img-top" style="opacity:1.0 !important; ">
      <div class="card-body" >
        <h5 class="card-title">Kendrick Lamar</h5>
        <p class="card-text">Kendrick Lamar Duckworth, mais conhecido como Kendrick Lamar, 
          é um rapper, produtor musical e compositor, considerado como um dos artistas mais influentes de sua geração</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ingressos disponíveis</small>
      </div>
    </div>
  </div>

@endsection  