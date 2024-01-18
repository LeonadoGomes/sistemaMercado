<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroProduto;

class HomesCreen extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function mostrarListaProdutos()
    {
        return view('welcome');
    }

    public function buscarProdutoPorCodigoDeBarras($codigoDeBarras)
    {
        $cadastroprodutos = CadastroProduto::where('codbarras', $codigoDeBarras)->first();

        if ($cadastroprodutos) {
            return response()->json($cadastroprodutos);
        } else {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
    }
}
