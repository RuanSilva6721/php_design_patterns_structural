<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Pedido;

class PedidoExportado implements ConteudoExportador{

    private Pedido $pedido;

    public function __construct(Pedido $pedido){
        $this->pedido = $pedido;
    }
    public function conteudo():array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }

}