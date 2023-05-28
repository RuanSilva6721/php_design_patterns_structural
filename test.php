<?php 
use Ruan\DP\CalcuradoraDesconto;
use Ruan\DP\CalcuradoraImpostos;
use Ruan\DP\Impostos\Icms;
use Ruan\DP\Impostos\Iss;
use Ruan\DP\Orcamento;

require "vendor/autoload.php";
require 'src/CalculadoraDesconto.php';

try{
    $calculadora= new CalcuradoraImpostos();
    $orcamento = new Orcamento();
    $orcamento->valor = 100;
    
    echo $calculadora->calcula($orcamento, new Icms(new Iss()));
    
}catch(Exception $e){
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

// $calculadora = new CalcuradoraDesconto();

// $orcamento =new Orcamento();
// $orcamento->valor = 400;
// $orcamento->qtdItens = 4;

// echo $calculadora->calculaDesconto($orcamento);