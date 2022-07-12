<?php

class Conta {
    public $numConta;
    protected $tipo; //cc = true || cp = false
    private $dono;
    private $saldo;
    private $status; // conta aberta = true
    
    function __construct ( $t, $d){
        $this-> numConta += 1 ;
        $this-> dono = $d;
        $this->status = false;
        $this->saldo = 0.00;
        if ($t == 'cc' ){
            $this->tipo = true;
        }else{
            $this->tipo = false;
        }
    }

    function abrirConta(){
        $this->status = true;
        if ($this->tipo == true ){
            $this->saldo = 50.00;
        }elseif ($this->tipo == false ){
            $this->saldo = 150.00;
        }
    }

    function fecharConta(){
        if ($this->saldo == 0) {
            $this->status = true;
        }
    }

    function depositar($v){
        if ($this->status = true){
            $this->saldo += $v;
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
        if ($this->status = true &&  $this->tipo = true  ){
            $this->saldo -= 12;
        }elseif ($this->status = true &&  $this->tipo = false ) {
            $this->saldo -= 20;
        }
    }

    function getnumConta(){
        echo  $this->status;
    } 
    function setnumConta($n){
       $this->status = $n;
    }
    function getTipo(){
        echo  $this->tipo;
    } 
    function setTipo($t){
       $this->tipo = $t;
    } 
    function getDono(){
        echo  $this->dono;
    }
    function setDono($d){
        $this->dono = $d;
    }
    function getSaldo(){
        echo  $this->saldo;
    }
    function setSaldo($sl){
       $this->saldo = $s;
    }
    function getStatus(){
        echo  $this->status;
    }
    function setStatus($st){
        $this->status = $st;
    }




}