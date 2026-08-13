<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Produto;
use App\Services\ProcessadorDePedido;
use App\Gateways\StoneGateway;
use App\Gateways\InfinityGateway;
use App\Gateways\MercadoPagoGateway;

$produto = new Produto("Caneta", 100.00);
$quantidade = 5;
$metodoPagamento = new StoneGateway();
$processador = new ProcessadorDePedido($metodoPagamento);
$processador->finalizarPedido($produto, $quantidade);
