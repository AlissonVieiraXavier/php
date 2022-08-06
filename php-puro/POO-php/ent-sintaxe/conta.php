<?php 

class conta
{
    //atributos
    public $numConta;
    protected $tipo;
    private $cliente;
    private $saldo;
    private $statusConta;


    //methods
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatusConta(true);
        if($t == 'CC'){
            $this->setSaldo(50);
        }elseif($t == 'CP'){
            $this->saldo = 150;
        }
    }
    public function fecharConta($c){
        if($this-> getSaldo() >0){
            echo "Conta ainda possui valores, não sera possivel fechá-la";
        }elseif($this-> getSaldo() < 0){
            echo "Conta me débito impossivél encerrar";

        }else{
            $this->setStatusConta = false;
        }
        
    }
    public function depositar($v){
        if ($this->getStatusConta()){
            $this->setSaldo($this->getSaldo()+$v);
        }else{
            echo" Conta fechada não é possivel depositar.";
        }
    }
    public function sacar($v){
        if($this->getStatusConta == true){
            if($this->getSaldo() > 0){
                $this->saldo = $this->getSaldo() - $v;
            }else{
              echo"não é possivel sacar, valor menor que R$0,00";
            }
        }else{
            echo"conta inativa, não é possivel realizar o saque.";
        }

        
    }
    public function mensalidade(){
        if($this->getTipo() =="CC"){
            $v = 15;
        }elseif($this->getTipo() =="CP"){
            $v=22;
        }
        if($this->getTipo()){
            $this->setSaldo($this->getSaldo() - $v);

        }else{
            echo" Conta inativa ou Problemas com a conta, não foi possivel cobrar a mensalidade";
        }
    }

    //special methods//
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatusConta(false);
    }

    //getters
    public function getnumConta(){
        return $this->numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getCliente(){
        return $this->cliente;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function getStatusConta(){
        return $this->statusConta;
    }

    //setters
    public function setnumConta($num){
        $this->numConta = $num;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function setSaldo($saldo){
        return $this->saldo =$saldo; 
    }
    public function setStatusConta($statusConta){
        return $this->statusConta = $statusConta;
    }
}