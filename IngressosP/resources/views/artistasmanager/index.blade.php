@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Artistas</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('artistasmanager.create') }}">Cadastrar Artista</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome Artístico</th>
            <th>Imagem</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($artistas as $artista)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $artista->nome_artistico }}</td>
            <td>{{ $artista->imagem }}</td>
            <td>
                <form action="{{ route('artistasmanager.destroy', $artista->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('artistasmanager.show', $artista->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('artistasmanager.edit', $artista->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $artistas->links() !!}
</div>

@endsection
