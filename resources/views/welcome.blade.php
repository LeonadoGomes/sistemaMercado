@extends('layouts.main')

@section('title', 'Título da Página')

@section('content')
    <div class="container">
        <!-- Container 1 -->
        <div class="g-block-1">
            <div class="block1">
                <h1>Caixa Aberto</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="g-block-2">
            <div class="block2">
                <img src="\img\carrinho-de-supermercado.png" alt="Descrição da Imagem">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="g-block-3">
            <div class="block3">
                <h2>Código de Barras</h2>
                <input type="text" id="codigoDeBarras" placeholder="Digite o código de barras">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="g-block-4">
            <div class="block4">
                <h2>Valor Unitário</h2>
                <div id="valorUnitario"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="g-block-5">
            <div class="block5">
                <h2>Total do Item</h2>
                <div id="quantidadeTotal"></div>
            </div>
        </div>
    </div>

    <!-- Container 2 -->
    <div class="container">
        <div class="g-block-6">
            <div class="block6">
                <h2>Código </h2>
                <div id="codigo"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="g-block-7">
            <div class="block7">
                <h2>teste</h2>
            </div>
        </div>
    </div>

    <!-- Container 3 -->
    <div class="container">
        <div class="g-block-8">
            <div class="block8">
                <div class="header-container">
                    <h2>Lista de produtos</h2>
                </div>
                <div class="table-container">
                    <table id="tabelaProdutos">
                        <thead>
                            <tr>
                                <th>N° Item</th>
                                <th>Nome</th>
                                <th>Código </th>
                                <th>Vlr.Unit.</th>
                                <th>Qtd</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Container 4 -->
    <div class="container">
        <div class="g-block-9">
            <div class="block9">
                <h2>subtotal</h2>
                <div id="subtotal"></div>
            </div>
        </div>

    </div>
    <!-- Container 4 -->
    <div class="container">
        <div class="g-block-10">
            <div class="block10">
                <h2>Total recebido</h2>
                <div id="totalrecebido"></div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="g-block-11">
            <div class="block11">
                <h2>Troco</h2>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="g-block-12">
            <div class="block12">
                <a class=""> <button type="button" class="btn btn-outline-info">F3- Excluir Item</button></a>
                <a class=""> <button type="button" class="btn btn-outline-info">F4- Inserir Quantidade</button></a>

                <a class="nav-link" href="/cadastro/cadastrarProdutos">
                    <button type="button" class="btn btn-outline-info" id="f5">F5- Cadastrar </button>
                </a>


            </div>
        </div>
    </div>

@endsection
