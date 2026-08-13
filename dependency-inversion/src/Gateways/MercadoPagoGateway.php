<?php

namespace App\Gateways;

class MercadoPagoGateway implements GatewayPagamentoInterface
{
    public function pagar(float $valorTotal): bool
    {
        echo "Pagamento de R$ {$valorTotal} realizado com sucesso via Mercado Pago!";
        return true;
    }
}