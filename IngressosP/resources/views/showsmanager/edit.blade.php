@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Editar Cadastro de Show</h1>
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

    <form action="{{ route('showsmanager.update', $show) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <!-- //* Nome -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="input" name="nome" class="form-control" value="{{ $show->nome }}">
                </div>
            </div>

            <!-- //* Descricao -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <input type="input" name="descricao" class="form-control" value="{{ $show->descricao }}">
                </div>
            </div>

            <!-- //* QtdeIngressos -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade de Ingressos (Capacidade):</strong>
                    <input type="input" name="qtd_ingressos" class="form-control" value="{{ $show->qtd_ingressos }}">
                </div>
            </div>

            <!-- //* Data -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data:</strong>
                    <input class="form-control" type="input" name="data" value="{{ $show->data }}">
                </div>
            </div>

            <!-- //* HorárioI -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horário de Ínicio:</strong>
                    <input class="form-control" type="input" name="horario_i" value="{{ $show->horario_i }}">
                </div>
            </div>

            <!-- //* HorárioF -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Horário de Término:</strong>
                    <input class="form-control" type="input" name="horario_f" value="{{ $show->horario_f }}">
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
                    <input type="text" name="imagem" value="{{ $show->imagem }}" class="form-control mb-2" placeholder="Imagem">
                </div>
            </div>

            <!-- //? Atualizar -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>

    </form>
</div>
@endsection