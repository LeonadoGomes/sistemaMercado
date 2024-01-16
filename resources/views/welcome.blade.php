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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="g-block-5">
            <div class="block5">
                <h2>Total do Item</h2>
            </div>
        </div>
    </div>

    <!-- Container 2 -->
    <div class="container">
        <div class="g-block-6">
            <div class="block6">
                <h2>Código </h2>
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
                    <table>
                        <thead>
                            <tr>
                                <th>N° Item</th>
                                <th>Código </th>
                                <th>Descrição</th>
                                <th>Qtd</th>
                                <th>Vlr.Unit.</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Produto 1</td>
                                <td>R$ 10,00</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>

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
            </div>
        </div>

    </div>
    <!-- Container 4 -->
    <div class="container">
        <div class="g-block-10">
            <div class="block10">
                <h2>Total recebido</h2>
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
                <button type="button" class="btn btn-outline-info">F3- Excluir Item</button>
                <button type="button" class="btn btn-outline-info">F4- Inserir Quantidade
                </button>
                <button type="button" class="btn btn-outline-info">F5- Nova Venda
            </div> </button>

        </div>
        <div>
            <div class="container">
                <div class="g-block-13">
                    <div class="block13">
                        <button type="button" class="btn btn-outline-info">F6- Pesquisar Venda</button>
                        <button type="button" class="btn btn-outline-info">F8- Alterar Venda
                        </button>
                        <button type="button" class="btn btn-outline-info">F9-Excluir Venda
                    </div> </button>

                </div>
                <div>
                @endsection
