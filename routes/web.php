<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesCreen;
use App\Http\Controllers\CadastrarProdutos;


Route::get('/', [HomesCreen::class, 'index']);
Route::get('/cadastro/cadastrarProdutos', [CadastrarProdutos::class, 'cadastro']);
Route::post('/cadastro', [CadastrarProdutos::class, 'cadastroprodutos']);
Route::get('/lista-produtos',  [HomesCreen::class, 'mostrarListaProdutos']);
Route::get('/buscar-produto/{codigoDeBarras}', [HomesCreen::class, 'buscarProdutoPorCodigoDeBarras']);
