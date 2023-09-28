@extends('app')

@section('titulo', 'Detalhes do funcionario')

@section('conteudo')
    <div class="card">
        <h5 class="card-header">Detalhes do Funcionario {{ $funcionario->nome }}</h5>
        <div class="card-body">
            <p><strong>ID: </strong> {{ $funcionario->id }}</p>
            <p><strong>Nome: </strong> {{ $funcionario->nome }}</p>
            <p><strong>CPF: </strong> {{ $funcionario->cpf }}</p>
            <p><strong>Data de Contratação: </strong> {{ $funcionario->data_contratacao }}</p>
            <p><strong>Data de Demissão: </strong> {{ $funcionario->data_demissao }}</p>
            <br>
            <a class="btn btn-success" href="{{ route('funcionarios.index') }}">Voltar para lista</a>
        </div>
    </div>   
@endsection    