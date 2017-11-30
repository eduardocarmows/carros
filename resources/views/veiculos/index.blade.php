@extends('app')

@section('content')
    <div class="container">
        <h1>Veiculos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Placa</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Combustivel</th>
                <th>Ano de Fabricação</th>
                <th>Ano Modelo</th>
                <th>Tipo Veiculo</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <a href="{{ url('/veiculo/create') }}" class="btn btn-primary pull-right">Novo Veiculo</a>
            @foreach($veiculos as $vei)
                <tr>
                    <td>{{ $vei->placa }}</td>
                    <td>{{ $vei->nome }}</td>
                    <td>{{ $vei->marca }}</td>
                    <td>{{ $vei->modelo }}</td>
                    <td>{{ $vei->cor }}</td>
                    <td>{{ $vei->combustivel }}</td>
                    <td>{{ $vei->ano_fabricado }}</td>
                    <td>{{ $vei->ano_modelo }}</td>
                    <td>{{ $vei->tipoVeiculo->descricao }}</td>
                    <td>
                        <a href="{{route('veiculo.edit', ['id'=>$vei->id])}}" class="btn-sm btn-success">Alterar</a>
                        <a href="{{route('veiculo.destroy', ['id'=>$vei->id])}}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection