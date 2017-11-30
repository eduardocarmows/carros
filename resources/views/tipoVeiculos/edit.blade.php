@extends('app')

@section('content')
    <div class="container">
        <h1>Tipo Veiculo : {{ $tipo_veiculo->descricao }}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route' => ["tipo_veiculo.update", $tipo_veiculo->id],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('descricao','Descrição:') !!}
            {!! Form::text('descricao',$tipo_veiculo->descricao, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            <a href="{{ url('/tipo_veiculo') }}" class="btn btn-primary">Cancelar</a>
        </div>



        {!! Form::close() !!}
    </div>
@endsection
