<?php
namespace Ruan\DP;

use Ruan\DP\Descontos\DescontoMaior500;
use Ruan\DP\Descontos\DescontoMaisDe5Itens;
use Ruan\DP\Descontos\SemDesconto;

class CalcuradoraDesconto {
    public function calculaDesconto(Orcamento $orcamento){



        $cadeiraDesconto = new DescontoMaisDe5Itens(
            new DescontoMaior500(
                new SemDesconto()
            )
            );
            $descontoCalculado= $cadeiraDesconto->calcuaDesconto($orcamento);
            $logDesconto = new LogDesconto();
            $logDesconto->informar($descontoCalculado);

            return $descontoCalculado;

    }

}