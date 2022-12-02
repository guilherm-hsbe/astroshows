@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Cadastro de Shows</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-success" href="{{ route('showsmanager.create') }}">Cadastrar Show</a>
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
            <th>Quantidade de Ingressos</th>
            <th>Data</th>
            <th>Horário de Início</th>
            <th>Horário de Término</th>
            <th>Artista</th>
            <th>Local</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($shows as $show)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $show->qtd_ingressos }}</td>
            <td>{{ $show->data }}</td>
            <td>{{ $show->horario_i }}</td>
            <td>{{ $show->horario_f }}</td>
            <td>{{ $show->artista_id }}</td>
            <td>{{ $show->local_id }}</td>
            <td>
                <form action="{{ route('showsmanager.destroy', $show->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('showsmanager.show', $show->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('showsmanager.edit', $show->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $shows->links() !!}
</div>

@endsection
