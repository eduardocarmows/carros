@extends('app')

@section('content')
    <div class="container">
        <h1>Tipo Veiculo</h1>
        <table class="table table-responsive table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Descricão</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <a href="{{ url('/tipo_veiculo/create') }}" class="btn btn-primary pull-right">Novo Tipo Veiculo</a>
            @foreach($tipoVeiculos as $tipo)
                <tr>
                    <td>{{ $tipo->descricao }}</td>
                    <td>
                        <a href="{{route('tipo_veiculo.edit', ['id'=>$tipo->id])}}" class="btn-sm btn-success">Alterar</a>
                        <a href="{{route('tipo_veiculo.destroy', ['id'=>$tipo->id])}}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
