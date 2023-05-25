<?php 
use Ruan\DP\Orcamento;
use Ruan\DP\Relatorio\ExportadorZIP;

require 'vendor/autoload.php';

$exportadorZip = new ExportadorZIP();
$orcamento =  new Orcamento();
$orcamento->valor =  500;

$exportadorZip->exportar($orcamento);