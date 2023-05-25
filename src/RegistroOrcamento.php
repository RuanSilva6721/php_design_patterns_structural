<?php
namespace Ruan\DP;

use Ruan\DP\Http\HttpAdapter;
use Ruan\DP\Stage\Finalizado;

class RegistroOrcamento {
    private HttpAdapter $http;
    public function __construct(HttpAdapter $http){
        $this->http = $http;
    }
    public function registrar(Orcamento $orcamento){
        if(!$orcamento->estadoAtual instanceof Finalizado){
            throw new \DomainException('ApenasOrçamentos finalizados podemser registrados na Api');
        }
        $this->http->post('http://api.registrar.orcamento',[
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->qtdItens
        ]);
    }

} 