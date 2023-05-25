<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Orcamento;

class OrcamentoExportado implements ConteudoExportador{

    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento){
        $this->orcamento = $orcamento;
    }
    public function conteudo():array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidades_itens' => $this->orcamento->qtdItens
        ];
    }

}