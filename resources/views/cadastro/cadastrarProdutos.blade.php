@extends('layouts.main')
@section('title', 'Cadastrar Produtos')

<body style="background-color: #ffffff">
    <div class="container">
        @yield('content')
    </div>
</body>

<head>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>
@section('content')
    <div class="form-container">
        <form action="/cadastro" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome Produto" name="nome">
                </div>
                <div class="form-group col-md-4">
                    <label for="codigo">Código</label>
                    <input type="text" class="form-control" id="codigo" placeholder="Código" name="codigo">
                </div>
                <div class="form-group col-md-4">
                    <label for="codbarras">Cod.Barras</label>
                    <input type="text" class="form-control" id="codbarras" placeholder="Código de Barras"
                        name="codbarras">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" placeholder="Status" name="status">
                </div>
                <div class="form-group col-md-3">
                    <label for="qtd">Quantidade</label>
                    <input type="number" class="form-control" id="qtd" placeholder="Quantidade" name="qtd">
                </div>
                <div class="form-group col-md-3">
                    <label for="datavencimento">Data de Vencimento</label>
                    <input type="date" class="form-control" id="datavencimento" placeholder="Data de Vencimento"
                        name="datavencimento">
                </div>
                <div class="form-group col-md-3">
                    <label for="preco" class="title1">Preço:</label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do Produto">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
