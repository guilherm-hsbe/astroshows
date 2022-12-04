@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastrar Novo Show</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('showsmanager.index') }}"> Voltar</a>
    <p></p>

    @if ($errors->any())
        <p></p>
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('showsmanager.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            
            <!-- Nome do Show -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome" class="form-control">
                </div>
            </div>

            <!-- //* Qtde Ingressos -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de Ingressos (Capacidade):</strong>
                    <input type="input" name="qtd_ingressos" class="form-control">
                </div>
            </div>

            <!-- Descrição -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="input" name="descricao" class="form-control">
                </div>
            </div>

            <!-- //* Data -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data:</strong>
                    <input class="form-control" type="input" name="data">
                </div>
            </div>

            <!-- //* HorárioI -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horário de Ínicio:</strong>
                    <input class="form-control" type="input" name="horario_i">
                </div>
            </div>
            
            <!-- //* HorárioF -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horário de Término:</strong>
                    <input class="form-control" type="input" name="horario_f">
                </div>
            </div>

            <!-- //* Artista -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Artista: </strong>
                    <select class="form-control" type="input" name="artista_id">
                        @foreach ($artistas as $artista)
                        <option value="{{ $artista->id }}">{{ $artista->nome_artistico }}</option>
                        
                        @endforeach
                    </select>

                    <select class="form-control" type="input" name="nome_artistico" hidden>
                        @foreach ($artistas as $artista)
                        <option value="{{ $artista->nome_artistico }}" hidden>{{ $artista->nome_artistico }}</option>
                        
                        @endforeach
                    </select>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Imagem:</strong>
                            <input type="file" name="imagem" class="form-control" placeholder="Imagem">
                        </div>
                    </div>
                </div>
            </div>

            <!-- //* Local -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Local:</strong>
                    <select class="form-control" type="input" name="local_id">
                        @foreach ($locais as $local)
                            <option value="{{ $local->id }}">{{ $local->nLocal }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- //* Imagem -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="file" name="imagem" class="form-control" placeholder="Imagem">
                </div>
            </div>

            <!-- //? Cadastrar -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </div>

    </form>
</div>
@endsection