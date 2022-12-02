@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Locais</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-outline-primary" href="{{ route('dashboard') }}"> Voltar</a>
    <a class="btn btn-success" href="{{ route('locaismanager.create') }}">Cadastrar Local</a>
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
            <th>Nome do Local</th>
            <th>CEP</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($locais as $local)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $local->nLocal }}</td>
            <td>{{ $local->cep }}</td>
            <td>
                <form action="{{ route('locaismanager.destroy', $local->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('locaismanager.show', $local->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('locaismanager.edit', $local->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $locais->links() !!}
</div>

@endsection
