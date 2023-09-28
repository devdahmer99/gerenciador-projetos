@extends('app')

@section('titulo', 'Lista de funcionarios')

@section('conteudo')
    <h1>Funcionarios Cadastrados</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Data de Contratação</th>
                <th scope="col">Data de Desligamento</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    <th scope="row">{{ $funcionario->id }}</th>
                    <td><a href="{{ route('funcionarios.show', $funcionario) }}">{{ $funcionario->nome }}</a></td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->data_contratacao }}</td>
                    <td>{{ $funcionario->data_demissao }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('funcionarios.edit', $funcionario) }}">Atualizar</a>
                        <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('funcionarios.create') }}">Cadastrar Novo Funcionario</a>
@endsection    