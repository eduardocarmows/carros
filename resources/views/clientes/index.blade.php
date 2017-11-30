@extends('app')

@section('content')
    <div class="container">
        <h1>Clientes</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>RG</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <a href="{{ url('/cliente/create') }}" class="btn btn-primary pull-right">Novo Cliente</a>
            @foreach($clientes as $cli)
                <tr>
                    <td>{{ $cli->nome }}</td>
                    <td>{{ $cli->rg }}</td>
                    <td>{{ $cli->endereco }}</td>
                    <td>{{ $cli->telefone }}</td>
                    <td>{{ $cli->dt_nascimento }}</td>
                    <td>
                        <a href="{{route('cliente.edit', ['id'=>$cli->id])}}" class="btn-sm btn-success">Alterar</a>
                        <a href="{{route('cliente.destroy', ['id'=>$cli->id])}}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
