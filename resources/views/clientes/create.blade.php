@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Cliente</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'cliente.store']) !!}

        <div class="form-group">
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rg','RG:') !!}
            {!! Form::text('rg',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('endereco','Endereço:') !!}
            {!! Form::text('endereco',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefone','Telefone:') !!}
            {!! Form::text('telefone',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dt_nascimento','Data de Nascimento:') !!}
            {!! Form::date('dt_nascimento','2017-09-28 00:00:00',
                ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Criar Cliente', ['class'=>'btn btn-primary']) !!}
            <a href="{{ url('/cliente') }}" class="btn btn-primary">Cancelar</a>
        </div>



        {!! Form::close() !!}
    </div>
@endsection
