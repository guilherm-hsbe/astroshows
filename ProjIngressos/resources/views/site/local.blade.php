@extends('site.layout')

@section('content')

<div class="img-backgroundingressos" 
    style="display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin-top:10%;"
    >
<!-- Conferir se a class foi aplicada adicionando background image -->
    <form style="background-color: black; opacity:0.8; padding:30px; border-radius:30px">

      <!-- Nome do local -->
      <div class="form-group">
        <label for="local" style="color:White">Local</label>
        <input type="local" class="form-control" id="local" aria-describedby="emailHelp"
          value="{{ session('local') }}" readonly>
      </div>
      <!-- Fim local -->
      <!-- Endereço -->
      <div class="form-group">
        <label for="local" style="color:White">Endereço</label>
        <input type="endereco" class="form-control" id="endereco" aria-describedby="emailHelp"
          value="{{ session('endereco') }}" readonly>
      </div>
      <!-- Fim Endereço -->
      <!-- numero-->
      <div class="input-group mb-3">       
        <div class="input-group-prepend">
          <span class="input-group-text">N.</span>
        </div>
        <input type="text" class="form-control" readonly/>
      </div>
      <!-- fim numero-->
      <!-- CEP -->
      <div class="input-group mb-3">       
        <div class="input-group-prepend">
          <span class="input-group-text">CEP:</span>
        </div>
        <input type="text" class="form-control" placeholder="00000-000" readonly/>
      </div>

      <!-- Fim CEP -->
        
      <div style="display: flex;
         justify-content: center;
         flex-direction:row;
         align-items: center;">
           <button type="submit" class="btn btn-primary" style="background-color:black; border:1px solid white">Enviar</button>
      </div>
      

    </form>

@endsection