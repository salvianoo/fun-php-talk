<?php
class Proc
{
    private $func;
    public function __construct($func)
    {
        $this->func = $func;
    }

    function compose($funcB) {
        $funComposta = function (...$args) use ($funcB) {
            return $this->getFunction()(
                $funcB->getFunction()(...$args)
            );
        };
        return $funComposta;
    }

    function getFunction()
    {
        return $this->func;
    }
}

$soma = function($a, $b) {
    return $a + $b;
};

$dobro = function($a) {
    return $a * 2;
};

$produto = function($a, $b) {
    return $a * $b;
};

$dobroProc = new Proc($dobro);
$produtoProc = new Proc($produto);
$somaProc = new Proc($soma);

$produto_da_soma = $produtoProc->compose($somaProc);
echo $produto_da_soma(2,2);

//$dobroDaSoma = ($dobroProc->compose( ($produtoProc)->compose($somaProc))
//echo $dobroDaSoma(1, 1);
