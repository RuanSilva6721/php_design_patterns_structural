<?php
namespace Ruan\DP;

use Ruan\DP\Http\HttpAdapter;

class RegistroOrcamento {
    private HttpAdapter $http;
    public function __construct(HttpAdapter $http){
        $this->http = $http;
    }
    public function registrar(Orcamento $orcamento){
        
    }

} 