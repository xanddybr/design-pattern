<?php

namespace App\Gateways;

class InfinityGateway implements GatewayPagamentoInterface
{
    public function pagar(float $valorTotal): bool
    {
        echo "Pagamento de R$ {$valorTotal} realizado com sucesso via Infinity Gateway!";
        return true;
    }
}