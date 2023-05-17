<?php
namespace Ruan\DP;

use Ruan\DP\Stage\EmAprovacao;

class Orcamento {
    public $valor;
    public $qtdItens;

    public $estadoAtual;

    public function __construct(){
        $this->estadoAtual =  new EmAprovacao();
    }
    public function aplicaDescExtra(){
        $this->valor -= $this->estadoAtual->calculaDescExtra($this);
    }
    public function aprova(){
        $this->estadoAtual->aprova($this);
    }
    public function reprova(){
        $this->estadoAtual->reprova($this);
    }
    public function finaliza(){
        $this->estadoAtual->finaliza($this);
    }
}