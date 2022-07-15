<?php

require_once './Animal.php';

class Peixe extends Animal{
    private $corEscama;

    public function locomover(){
        Echo "<P>Peixes Nadam!</p>";
    }

    public function alimentar(){
        Echo "<P>Peixes comem subistancias</p>";        
    }

    public function emitirSom(){
        Echo "<P>paixes não emitem som </p>";        
    }

    public function soltarBolhas(){
        Echo "<P>Peixes Soltam Bolhas</p>";        
    }

    /**
     * Get the value of corEscama
     */ 
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */ 
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}