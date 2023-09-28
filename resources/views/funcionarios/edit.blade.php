@extends('app')

@section('titulo', 'Editar Funcionario')

@section('conteudo')
    <h1>Editar Funcionario</h1>

    <form action="{{ route('funcionarios.update', $funcionario) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $funcionario->nome }}" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" value="{{ $funcionario->cpf}}" class="form-control" id="cpf" name="endereco" placeholder="Digite o CPF" required>
        </div>
        <div class="mb-3">
            <label for="data_contratacao" class="form-label">Data Contratacao</label>
            <textarea class="form-control" id="data_contratacao" name="data_contratacao" rows="3" placeholder="Digite a Data de Admissao" required>{{ $funcionario->data_contratacao }}</textarea>
        </div> 
        <div class="mb-3">
            <label for="data_demissao" class="form-label">Data Demissao</label>
            <textarea class="form-control" id="data_demissao" name="data_demissao" rows="3" placeholder="Digite a Data de Desligamento" required>{{ $funcionario->data_contratacao }}</textarea>
        </div> 

        <button class="btn btn-success" type="submit">Atualizar Dados</button> 
        <button class="btn btn-primary"><a href="{{route('funcionarios.index')}}" style="color:white; text-decoration: none">Voltar a tela anterior</a></button>
    </form>
@endsection    