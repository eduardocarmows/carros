@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastros</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="{{ url('/cliente') }}">Cadastro de Clientes</a>
                        <br>
                        <a href="{{ url('/tipo_veiculo') }}">Cadastro de Tipo Veiculos</a>
                        <br>
                        <a href="{{ url('/veiculo') }}">Cadastro de Veiculos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
