<?php
namespace App\Gateways;

Class MercadoPagoGateway implements GatewayPagamentoInterface
{
    public function pagar(float $valorTotal): bool
    {
        echo "Pagamento realizado com sucesso via MercadoPago no valor de R$ {$valorTotal}!";
        return true;
    }
}