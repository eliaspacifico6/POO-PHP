<?php

class Conta {
    public $numConta;
    protected $tipo; //cc = true || cp = false
    private $dono;
    private $saldo;
    private $status; // conta aberta = true
    
    function __construct (){
        $this->status= true;
        $this->saldo = 0.00;

    }

    function getNumConta(){
        return $this->numConta;
    } 
    function setNumConta($numConta){
       $this->numConta = $numConta;
    }
    function getTipo(){
        return $this->tipo;
    } 
    function setTipo($t){
       $this->tipo = $t;
    } 
    function getDono(){
        return $this->dono;
    }
    function setDono($d){
        $this->dono = $d;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function setSaldo($saldo){
       $this->saldo = $saldo;
    }
    function getStatus(){
        return $this->status;
    }
    function setStatus($status){
        $this->status = $status;
    }

    function abrirConta($t){
        $this->setStatus(true);
        $this->tipo = $t;
        if ($this->tipo == 'CC' ){
            $this->saldo = 50.00;
        }elseif ($this->tipo == 'CP' ){
            $this->saldo = 150.00;
        }
        echo "<p>Conta Aberta com Sucesso!</p>";
    }

    function fecharConta(){
        if ($this->saldo > 0) {
            echo "<p>Conta Com saldo positivo!</p> ";
        }elseif ($this->saldo < 0) {
            echo "<p>Conta Com saldo negativo!</p> ";
        }else{
            $this->status = false;
        }
    }

    function depositar($valor){
        if ($this->status = true){
            $this->saldo += $valor;    
            echo "<p>Deposito de R$: {$valor}  realizado na conta {$this->getNumConta()} da pessa: {$this->getDono()}</p> ";
        
        }else {
            echo "Conta Inativa!";
        }
    }

    function sacar($valor){
        if ($this->status = true &&  $this->saldo >= $valor ){
            $this->saldo -= $valor;
            echo "<p>Saque de R$: {$valor}  realizado na conta {$this->getNumConta()} da pessa: {$this->getDono()} </p> ";
        }
        else{
            echo "Saldo inuficiente para sacar {$valor}";
        }
    }

    function pagarMensalidade(){
        if ($this->getTipo()== "CC"){
            $v = 12;
        }elseif ($this->getTipo()== "CP" ) {
            $v = 20;
        }

        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p> Mensalidade  de R$: $v Debitado na conta {$this->getNumConta()} de {$this->getDono()}.";
        }

    }




}