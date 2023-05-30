<?php

use Ruan\DP\ItensOrcamento;
use Ruan\DP\Orcamento;
use Ruan\DP\CacheOrcamentoProxy;

require 'vendor/autoload.php';


$orcamento = new Orcamento();
$item1 = new ItensOrcamento();
$item1->valor = 300;
$item2 = new ItensOrcamento();
$item2->valor = 700;


$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItensOrcamento();
$item3->valor = 200;
$orcamentoAntigo->addItem($item3);
$orcamento->addItem($orcamentoAntigo);

$proxyCache =  new CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;