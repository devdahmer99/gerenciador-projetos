@extends('app')

@section('titulo', 'Novo Funcionario')

@section('conteudo')
<h1>Novo Funcionario</h1>
<form action="{{ route('funcionarios.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">CPF</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço" required>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Data Contratação</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a Observação" required></textarea>
    </div> 

    <button class="btn btn-success" type="submit">Cadastrar</button>
    <button class="btn btn-primary"><a href="{{route('funcionarios.index')}}" style="color:white; text-decoration: none">Voltar a tela anterior</a></button>       
</form>

@endsection