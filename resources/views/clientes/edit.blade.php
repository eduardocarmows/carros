@extends('app')

@section('content')
    <div class="container">
        <h1>Cliente : {{ $cliente->nome }}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route' => ["cliente.update", $cliente->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',$cliente->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rg','RG:') !!}
            {!! Form::text('rg',$cliente->rg, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('endereco','Endereço:') !!}
            {!! Form::text('endereco',$cliente->endereco, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefone','Telefone:') !!}
            {!! Form::text('telefone',$cliente->telefone, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dt_nascimento','Data de Nascimento:') !!}
            {!! Form::date('dt_nascimento',$cliente->dt_nascimento,
                ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            <a href="{{ url('/cliente') }}" class="btn btn-primary">Cancelar</a>
        </div>



        {!! Form::close() !!}
    </div>
@endsection
