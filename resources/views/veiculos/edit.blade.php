@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Veiculo : {{ $veiculo->nome }}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["veiculo.update", $veiculo->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('placa','Placa:') !!}
            {!! Form::text('placa',$veiculo->placa, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$veiculo->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('marca','Marca:') !!}
            {!! Form::text('marca',$veiculo->marca, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('modelo','Modelo:') !!}
            {!! Form::text('modelo',$veiculo->modelo, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cor','Cor:') !!}
            {!! Form::text('cor',$veiculo->cor, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('combustivel','Combustivel:') !!}
            {!! Form::text('combustivel',$veiculo->combustivel, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ano_fabricado','Data de Fabricação:') !!}
            {!! Form::date('ano_fabricado',$veiculo->ano_fabricado,
                ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ano_modelo','Data Modelo:') !!}
            {!! Form::date('ano_modelo',$veiculo->ano_modelo,
                ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tipo_id','Tipo Veiculo:') !!}
            {!! Form::select('tipo_id',
                                \App\TipoVeiculo::orderBy('descricao')->pluck('descricao','id')->toArray(),$veiculo ->tipo_id,

                ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            <a href="{{ url('/veiculo') }}" class="btn btn-primary">Cancelar</a>
        </div>



        {!! Form::close() !!}
    </div>
@endsection
