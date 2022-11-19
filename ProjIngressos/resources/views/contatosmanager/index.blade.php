@extends('site.layout')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Gerenciamento de Contatos</h1>
    <hr class="my-4">
</div>

<div class="container p-5 mt-5" style="height: 100%">
    <a class="btn btn-outline-primary" href=""> Voltar</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success col-2 text-center mx-auto">
            <p style="margin:0">{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover table-borderless table-light rounded">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Data</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Status</th>
                <th width="280px">Ação</th>
            </tr>
        </thead>
        @foreach ($contatos as $contato)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contato->created_at }}</td>
            <td>{{ $contato->nome }}</td>
            <td>{{ $contato->email }}</td>
            <td>{{ $contato->telefone }}</td>
            <td>{{( $contato->status ? "Lida": "Não Lida")}}</td>
            <td class="col-2">
                <form action="{{ route('contatosmanager.destroy', $contato->id) }}" method="POST">

                    <a class="btn btn-outline-primary" href="{{ route('contatosmanager.show', $contato->id) }}">Exibir</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $contatos->links() !!}
</div>

@endsection
