$(document).ready(function () {
    $('#codigoDeBarras').on('input', function () {
        var codigoDeBarras = $(this).val();

        $.ajax({
            url: '/buscar-produto/' + codigoDeBarras,
            type: 'GET',
            success: function (cadastroprodutos) {
                // Adicionar ou atualizar a linha na tabela
                adicionarOuAtualizarLinhaTabela(cadastroprodutos);

                // Atualizar o valor unitário na interface do usuário
                atualizarValorUnitario(cadastroprodutos.preco);

                // Receber o código do produto
                atualizarCodigo(cadastroprodutos.codigo);

                // Atualizar a quantidade total de itens na interface do usuário
                atualizarQuantidadeTotal();

                // Calcular o subtotal após todas as operações
                calcularSubtotal();
            },
            error: function (xhr, status, error) {
                console.log('Erro ao buscar produto:', error);
            }
        });
    });


    // Função para adicionar ou atualizar a linha na tabela
    function adicionarOuAtualizarLinhaTabela(cadastroprodutos) {
        // Verificar se o produto já está na tabela
        var linhaExistente = $('#tabelaProdutos tbody tr[data-id="' + cadastroprodutos.id + '"]');

        if (linhaExistente.length > 0) {
            // Se a linha já existe, atualizar a quantidade
            var quantidadeAtual = parseInt(linhaExistente.find('.qtd').text()) + 1;
            linhaExistente.find('.qtd').text(quantidadeAtual);

            // Calcular e atualizar o total
            var valorUnitario = parseFloat(cadastroprodutos.preco);
            var totalAtualizado = quantidadeAtual * valorUnitario;
            linhaExistente.find('.total').text('R$ ' + totalAtualizado.toFixed(2));
        } else {
            // Se a linha não existe, adicionar uma nova
            var totalInicial = parseFloat(cadastroprodutos.preco);
            var novaLinha = '<tr data-id="' + cadastroprodutos.id + '"><td>' + cadastroprodutos.id + '</td><td>' + cadastroprodutos.nome + '</td><td>' + cadastroprodutos.codigo + '</td><td>R$ ' + cadastroprodutos.preco + '</td><td class="qtd">1</td><td class="total">R$ ' + totalInicial.toFixed(2) + '</td></tr>';
            $('#tabelaProdutos tbody').append(novaLinha);
        }

        // Atualizar outras partes da interface se necessário
        atualizarValorUnitario(cadastroprodutos.preco);
        atualizarCodigo(cadastroprodutos.codigo);
        atualizarQuantidadeTotal();

        // Calcular o subtotal após todas as operações
        calcularSubtotal();



    }

    // Função para atualizar o valor unitário na interface do usuário
    function atualizarValorUnitario(valor) {
        $('#valorUnitario').text('R$ ' + valor);
    }

    // Função para atualizar o código na interface do usuário
    function atualizarCodigo(codigo) {
        $('#codigo').text(codigo);
    }

    // Função para atualizar a quantidade total de itens na interface do usuário
    function atualizarQuantidadeTotal() {
        var quantidadeTotal = 0;

        // Iterar sobre as linhas da tabela e somar as quantidades
        $('#tabelaProdutos tbody tr').each(function () {
            quantidadeTotal += parseInt($(this).find('.qtd').text()) || 0;
        });

        // Atualizar a quantidade total na interface do usuário
        $('#quantidadeTotal').text(quantidadeTotal);
    }


    function calcularSubtotal() {
        var subtotal = 0;
        // Iterar sobre as linhas da tabela e somar os valores totais
        // Iterar sobre as linhas da tabela e somar os valores totais
        $('#tabelaProdutos tbody tr').each(function () {
            var valorTotalLinha = parseFloat($(this).find('.total').text().replace('R$ ', '')) || 0;
            subtotal += valorTotalLinha;
        });

        // Atualizar o elemento #subtotal com o valor calculado
        $('#subtotal').text('R$ ' + subtotal.toFixed(2));
    }
});
