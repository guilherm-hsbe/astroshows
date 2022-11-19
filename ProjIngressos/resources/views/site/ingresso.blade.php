@extends('site.layout')

@section('content')


<!-- foreach ($artistas as $artista) -->
<div style="display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin-top:10%;">

    <form style="background-color: black; opacity:0.8; padding:30px; border-radius:30px">

      <!-- Nome do show -->
      <div class="form-group">
        <label for="show" style="color:White">Show</label>
        <input type="show" class="form-control" id="show" aria-describedby="emailHelp"
          value="{{ session('nome_artistico') }}" readonly>
        <small id="show" style="color:White">Você escolheu show do {{ ('nome_artistico') }}</small>
      </div>
      <!-- Fim Nome do show -->
      <!-- Preço -->
      <label for="show" style="color:White">Preço</label>
      <div class="input-group mb-3">
        
        <div class="input-group-prepend">
          
          <span class="input-group-text">$</span>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="200" readonly>
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
      <!-- Fim preço -->

      <div class="form-row align-items-center">
        <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect" style="color:White">Preferencia</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option selected>Pista...</option>
            <option value="1">Arquibancada</option>
            <option value="2">Vip</option>
            <option value="3">Camarote</option>
          </select>

        </div>
        
        <br>

        <div class="form-group">
          <label for="" style="color:White">Data do Show</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="27/11/22"
            readonly>
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
      </div>
      <div style="display: flex;
      justify-content: center;
      flex-direction:row;
      align-items: center;">
      <button type="submit" class="btn btn-primary" style="background-color:black; border:1px solid white">Comprar</button>
    </div>
      

    </form>

<!-- endforeach -->
@endsection