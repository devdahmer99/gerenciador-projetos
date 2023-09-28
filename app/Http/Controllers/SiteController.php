<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function sobre()
    {
        $soma = 10 + 1;
        echo "Conteudo dinâmico sobre $soma";
    }

    public function contato()
    {
        echo "Conteúdo da página de contato";
    }

    public function servicos()
    {
        echo "Conteúdo da página de serviços";
    }

    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavanderia de Roupa',
                'descricao' => 'descricao do serviço de Roupas'
            ],
            2 => [
                'nome' => 'Lavanderia de Coberta',
                'descricao' => 'descricao do serviço de Coberta'
            ],
            3 => [
                'nome' => 'Lavanderia de Sapatos',
                'descricao' => 'descricao do serviço de Sapatos'
            ],
        ];

        return view('site.servico', ['servico' => $servicos[$id], 'outro' => 'treinaweb']);
    }
}
