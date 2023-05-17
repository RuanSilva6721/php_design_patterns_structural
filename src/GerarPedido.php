<?php
namespace Ruan\DP;

use Ruan\DP\Actions\CriarPedido;

class GerarPedido implements Command {
    private $valorOrcamento; 
    private $numeroDeItens;
    private $nomeCliente;
    public function __construct($valorOrcamento, $numeroDeItens, $nomeCliente){
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;

    }
    public function execute(){
        $orcamento = new Orcamento();

        $orcamento->qtdItens = $this->numeroDeItens;
        $orcamento->valor =  $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;
        
        $CriarPedido = new CriarPedido();
        $CriarPedido->executandoAcao($pedido);

    }
}