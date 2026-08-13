<?php

namespace App\Gateways;

interface GatewayPagamentoInterface
{
    public function pagar(float $valorTotal):bool;
}
