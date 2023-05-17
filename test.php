<?php 
use Ruan\DP\CalcuradoraDesconto;
use Ruan\DP\CalcuradoraImpostos;
use Ruan\DP\Impostos\Icms;
use Ruan\DP\Impostos\iss;
use Ruan\DP\Orcamento;

require "vendor/autoload.php";
require 'src/CalculadoraDesconto.php';

// $calculadora= new CalcuradoraImpostos();
// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms());


$calculadora = new CalcuradoraDesconto();

$orcamento =new Orcamento();
$orcamento->valor = 400;
$orcamento->qtdItens = 4;

echo $calculadora->calculaDesconto($orcamento);