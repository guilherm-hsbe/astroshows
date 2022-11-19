{{-- use Illuminate\Support\Facades\Mail; --}}

@extends('site.layout')

@section('content')

<div class="img-back">
  <div class="jumbotron bg-transparent text-light" style="border-radius:0">
      <h1 class="display-4">Fale Conosco</h1>
      <hr class="my-4">
      <p class="lead">Nossa equipe está sempre a disposição para 
          atendimento. Entre em contato, iremos responder o mais breve possível.</p>
  </div>

  <div class="container text-light">
      @if(session('msg'))
          <p class="msg bg-dark p-2 shadow-sm" style="border-radius: 8px;">{{ session('msg') }}</p>
          <p></p>
      @endif
      <form method="post" class="transp-input">
          @csrf
          <div class="form-group">
              <label for="nomeContato">Nome</label>
              <input type="text" class="form-control" id="nomeContato" name="nomeContato" placeholder="Guilherme">
            </div>
          <div class="form-group">
            <label for="emailContato">Email</label>
            <input type="email" class="form-control" id="emailContato" name="emailContato" placeholder="guilherme@email.com">
          </div>
          <div class="form-group">
            <label for="telefoneContato">Telefone</label>
            <input type="number" class="form-control" id="telefoneContato" name="telefoneContato" placeholder="18988058371" maxlength="12">
          </div>
          <div class="form-group">
            <label for="mensagemContato">Mensagem</label>
            <textarea class="form-control" id="mensagemContato" name="mensagemContato" rows="3" placeholder="Escreva sua mensagem..."></textarea>
          </div>

          <button type="submit" class="btn btn-outline-light mb-2" value="Enviar">Enviar</button>
      </form>
  </div>
  <hr>
</div>

@endsection