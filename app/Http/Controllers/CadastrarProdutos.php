<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroProduto;

class CadastrarProdutos extends Controller
{
    public function cadastro()
    {
        return view('cadastro.cadastrarProdutos');
    }


    public function cadastroprodutos(Request $request)
    {
        $cadastroprodutos = new CadastroProduto;

        $cadastroprodutos->nome = $request->nome;
        $cadastroprodutos->codigo = $request->codigo;
        $cadastroprodutos->codbarras = $request->codbarras;
        $cadastroprodutos->status = $request->status;
        $cadastroprodutos->qtd = $request->qtd;
        $cadastroprodutos->datavencimento = $request->datavencimento;
        $cadastroprodutos->preco = $request->preco;

        $cadastroprodutos->save();

        return redirect('/');
    }
}
