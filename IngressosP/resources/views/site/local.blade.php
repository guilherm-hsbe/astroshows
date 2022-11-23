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
<form  style="background-color: black; opacity:0.8; padding:50px; border-radius:40px">

<!-- Nome do local -->
<div class="form-group" >
  <label for="nomeLocal" style="color:White">Local</label>
  <input type="text" class="form-control" id="nomeLocal" aria-describedby="emailHelp" readonly>
</div>
<!-- Fim local -->
<!-- Endereço -->
<div class="form-group">
  <label for="endereco" style="color:White">Endereço</label>
  <input type="text" class="form-control" id="endereco" aria-describedby="emailHelp" readonly>
</div>
<!-- Fim Endereço -->
<!-- numero-->
<div class="form-group">
  <label for="numero" style="color:White">Número</label>
  <input type="text" class="form-control" id="numero" aria-describedby="emailHelp" readonly>
</div>
<!-- fim numero-->
<!-- cidade-->
<div class="form-group">
  <label for="cidade" style="color:White">Cidade</label>
  <input type="text" class="form-control" id="cidade" aria-describedby="emailHelp" readonly>
</div>
<!-- fim cidade-->
<!-- estado-->
<div class="form-group">
  <label for="estado" style="color:White">Estado</label>
  <input type="text" class="form-control" id="estado" aria-describedby="emailHelp" readonly>
</div>
<!-- fim numero-->
<!-- CEP -->
<div class="form-group">
  <label for="cep" style="color:White">CEP</label>
  <input type="text" class="form-control" id="cep" aria-describedby="emailHelp" placeholder="00000-000" readonly>
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