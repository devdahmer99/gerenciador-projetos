<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::get();

        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    public function show(int $id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.show');
    }

    public function create()
    {
        return view('funcionarios.create');
    }  

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Funcionario::create($dados);

        return redirect('/funcionarios');
    }

    public function edit(int $id)
    {
        $funcionario = Funcionario::find($id);

        return view('funcionarios.edit', ['funcionario' => $funcionario]);
    }

    public function update(int $id, Request $request)
    {
        $funcionario = Funcionario::find($id);

        $funcionario::update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'data_contratacao' => $request->data_contratacao
        ]);

        return redirect('/funcionarios');
    }

    public function destroy(int $id)
    {
        $funcionario = Funcionario::find($id);

        $funcionario->destroy();
        return redirect('/funcionarios');
    }
}
