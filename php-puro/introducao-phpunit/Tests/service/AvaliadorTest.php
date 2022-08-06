<?php

namespace Alura\Leilao\Tests\Service;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\avaliador;
use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase
{
   public function test1(){
             //simulo determinado evento

      $leilao = new Leilao(descricao:'fiat 147 0KM');
      $maria = new Usuario(nome:"maria");
      $joao = new Usuario(nome:"João");
      
      $leilao -> recebeLance(new Lance($joao,valor: 3000 ));
      $leilao -> recebeLance(new Lance($maria,valor: 3500 ));
      $leiloeiro = new avaliador();
      
      //executo codigo á ser testado
      $leiloeiro->avalia($leilao);
      $maiorValor = $leiloeiro->getMaiorValor();
      
      //verifico se é a saida esperada;
      self::assertEquals(3500,$maiorValor);

    }
}