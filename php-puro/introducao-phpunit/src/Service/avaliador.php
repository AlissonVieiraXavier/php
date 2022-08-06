<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Lance;

class Avaliador
{
    private $maiorValor = -INF;
    private $menorValor = INF;

    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) {
                $this->maiorValor = $lance->getValor();
            }

            if ($lance->getValor() < $this->menorValor) {
                $this->menorValor = $lance->getValor();
            }
        }
        /*
        $lances = $leilao->maiorValor;
        usort(&array:$lances,function(Lance $lance1,Lance $lance2){});*/
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }
}