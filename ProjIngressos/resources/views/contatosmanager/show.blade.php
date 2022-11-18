@extends('site.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Exibir Contato</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-outline-primary" href="{{ route('contatosmanager.index') }}"> Voltar</a>
    <p></p>

    <div class="list-group">
        <a class="list-group-item list-group-item-action list-group-item-secondary" aria-current="true">ID: 
            <strong>{{ $contato->id }}</strong></a>

        <a class="list-group-item list-group-item-action">Nome: 
            <strong>{{ $contato->nome }}</strong></a>

        <a class="list-group-item list-group-item-action">Email: 
            <strong>{{ $contato->email }}</strong></a>

        <a class="list-group-item list-group-item-action">Telefone: 
            <strong>{{ $contato->telefone }}</strong></a>
            
        <a class="list-group-item list-group-item-action">Mensagem: 
            <strong>{{ $contato->mensagem }}</strong></a>
    </div>
</div>

@endsection
