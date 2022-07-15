<?php

require_once './Aluno.php';

class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa(){
        echo "Bolsa Renovada!";
    }

    public function pagarMensalidade(){
        echo "Bolista {$this->getNome()} Não paga mensalidades";
    }

    /**
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}
