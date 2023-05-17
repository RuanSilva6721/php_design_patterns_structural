<?php
namespace Ruan\DP\Actions;

use Ruan\DP\Pedido;

class CriarPedido {
    public function executandoAcao(Pedido $pedido){
        
        echo "Nome: ". $pedido->nomeCliente .  PHP_EOL;
        echo "Criar Pedido";
    }
}