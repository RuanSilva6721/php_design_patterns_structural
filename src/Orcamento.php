<?php
namespace Ruan\DP;

use Ruan\DP\Stage\EmAprovacao;

class Orcamento implements Orcavel{

    private array $itens;
    public $estadoAtual;

    public function __construct(){
        $this->estadoAtual =  new EmAprovacao();
        $this->itens = [];
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
    public function addItem(Orcavel $itens){
        $this->itens[] = $itens;
    }
    public function valor():float
    {
        return array_reduce($this->itens, fn (float $valorAcumulado, Orcavel $itens) =>  $itens->valor() + $valorAcumulado, 0); //arrow function
    }
}