<?php

use Ruan\DP\GerarPedido;


require "vendor/autoload.php";

// $valorOrcamento = $argv[1];
// $numeroDeItens = $argv[2];
// $nomeCliente = $argv[3];


#$gerarPedido= new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido= new GerarPedido(1000, 12, "Ruan Felipe");
$gerarPedido->execute();
