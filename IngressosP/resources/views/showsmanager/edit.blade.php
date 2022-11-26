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

    <form action="{{ route('artistasmanager.update', $artista) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

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
                    <strong>Artista:</strong>
                    <select class="form-control" type="input" name="artista_id" value="{{ $show->artista_id }}">
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <!-- //* Local -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Local:</strong>
                    <select class="form-control" type="input" name="local_id" value="{{ $show->local_id }}">
                        <option value=""></option>
                    </select>
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
