<?php 
use Ruan\DP\Orcamento;
use Ruan\DP\Pedido;
use Ruan\DP\Relatorio\ArquivoExportadorXML;
use Ruan\DP\Relatorio\ArquivoExportadorZIP;
use Ruan\DP\Relatorio\ExportadorZIP;
use Ruan\DP\Relatorio\OrcamentoExportado;
use Ruan\DP\Relatorio\PedidoExportado;

require 'vendor/autoload.php';

// $exportadorZip = new ExportadorZIP();
// $orcamento =  new Orcamento();
// $orcamento->valor =  500;

// $exportadorZip->exportar($orcamento);

// $orcamento = new Orcamento();
// $orcamento->valor = 500;
// $orcamento->qtdItens = 7;

// $orcamentoExportado = new OrcamentoExportado($orcamento);
// $orcamentoExportadoXML = new ArquivoExportadorZIP('orcamento');
// $orcamentoExportadoXML = new ArquivoExportadorXML('orcamento');

// echo $orcamentoExportadoXML->salvar($orcamentoExportado);

$pedido =  new Pedido();
$pedido->nomeCliente = 'Ruan Silva';
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado =  new PedidoExportado($pedido);
$pedidoExportadoXMl = new ArquivoExportadorXML('pedido');

echo $pedidoExportadoXMl->salvar($pedidoExportado);