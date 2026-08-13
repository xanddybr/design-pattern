<?php

namespace App\Services;
use App\Models\Produto;
use App\Gateways\GatewayPagamentoInterface;

class ProcessadorDePedido
{
    private $gatewayPagamento;

    public function __construct(GatewayPagamentoInterface $gatewayPagamento)
    {
        $this->gatewayPagamento = $gatewayPagamento;
    }

    public function finalizarPedido(Produto $produto, int $quantidade): void
    {
        $valorTotal = $produto->preco * $quantidade;

        echo "--- Processando Pedido ---\n";
        echo "Item: {$produto->nome} | Qtd: {$quantidade} | Total: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";

        // Delega o pagamento para o gateway injetado
        $sucesso = $this->gatewayPagamento->pagar($valorTotal);

        if ($sucesso) {
            echo "Pedido finalizado com sucesso!\n\n";
        } else {
            echo "Falha no processamento do pagamento.\n\n";
        }
    }
}