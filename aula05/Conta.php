<?php

class Conta {
    public $numConta;
    protected $tipo; //cc = true || cp = false
    private $dono;
    private $saldo;
    private $status; // conta aberta = true
    
    function __construct (){
        $this-> numConta += 1 ;
        $this->saldo = 0.00;

    }

    function abrirConta($t){
        $this->tipo = $t;
        if ($this->tipo == 'CP' ){
            $this->saldo = 50.00;
        }else if ($this->tipo == 'CP' ){
            $this->saldo = 150.00;
        }
    }

    function fecharConta(){
        if ($this->saldo > 0) {
            echo "Conta Com saldo positivo!";
        }elseif ($this->saldo < 0) {
            echo "Conta Com saldo negativo!";
        }else{
            $this->status = false;
        }
    }

    function depositar($v){
        if ($this->status = true){
            $this->saldo += $v;
        }else {
            echo "Conta Inativa!";
        }
    }

    function sacar($v){
        if ($this->status = true &&  $this->saldo >= $v ){
            $this->saldo -= $v;
        }
        else{
            echo "Saldo inuficiente para sacar {$v}";
        }
    }

    function pagarMensalidade(){
        if ($this->status = true &&  $this->tipo = 'CC'  ){
            $this->saldo -= 12;
        }elseif ($this->status = true &&  $this->tipo = 'CP' ) {
            $this->saldo -= 20;
        }
    }

    function getnumConta(){
        return $this->status;
    } 
    function setnumConta($n){
       $this->status = $n;
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
    function setSaldo($sl){
       $this->saldo = $s;
    }
    function getStatus(){
        return $this->status;
    }
    function setStatus($st){
        $this->status = $st;
    }




}