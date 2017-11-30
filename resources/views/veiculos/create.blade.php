@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Veiculo</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'veiculo.store']) !!}

        <div class="form-group">
            {!! Form::label('placa','Placa:') !!}
            {!! Form::text('placa',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('marca','Marca:') !!}
            {!! Form::text('marca',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('modelo','Modelo:') !!}
            {!! Form::text('modelo',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cor','Cor:') !!}
            {!! Form::text('cor',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('combustivel','Combustivel:') !!}
            {!! Form::text('combustivel',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ano_fabricado','Ano de Fabricação:') !!}
            {!! Form::date('ano_fabricado','2017-09-28 00:00:00',
                ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('ano_modelo','Ano Modelo:') !!}
            {!! Form::date('ano_modelo','2017-09-28 00:00:00',
                ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo_id','Tipo Veiculo:') !!}
            {!! Form::select('tipo_id',
                                \App\TipoVeiculo::orderBy('descricao')->pluck('descricao','id')->toArray(),null,

                ['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Criar Veiculoe', ['class'=>'btn btn-primary']) !!}
            <a href="{{ url('/veiculo') }}" class="btn btn-primary">Cancelar</a>
        </div>



        {!! Form::close() !!}
    </div>
@endsection
