@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Exibir Cadastro de Local (Detalhado)</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('locaismanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">

        <!-- * Nome do Local -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome do Local:</strong>
                {{ $local->nLocal }}
            </div>
        </div>

        <!-- * Endereço -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endereço:</strong>
                {{ $local->endereco }}
            </div>
        </div>
        
        <!-- * Número -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Número:</strong>
                {{ $local->numero }}
            </div>
        </div>

        <!-- * Cidade -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                {{ $local->cidade }}
            </div>
        </div>

        <!-- * Estado -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $local->estado }}
            </div>
        </div>

        <!-- * CEP -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CEP:</strong>
                {{ $local->cep }}
            </div>
        </div>
    </div>
</div>
@endsection
