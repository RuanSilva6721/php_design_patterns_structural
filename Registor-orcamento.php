<?
use Ruan\DP\Http\CurlHttpAdapter;
use Ruan\DP\Http\ReactHttpAdapter;
use Ruan\DP\Orcamento;
use Ruan\DP\RegistroOrcamento;

require 'vendor/autoload.php';


// $registor = new RegistroOrcamento(new CurlHttpAdapter);
$registor = new RegistroOrcamento(new ReactHttpAdapter);

$registor->registrar(new Orcamento);