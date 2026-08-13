<?php

namespace App\Gateways;

class StoneGateway implements GatewayPagamentoInterface
{
    public function pagar(float $valorTotal): bool
    {
        echo "Pagamento de R$ {$valorTotal} realizado com sucesso via Stone Gateway!";
        return true;
    }
}