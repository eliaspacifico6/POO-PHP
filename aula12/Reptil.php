<?php

require_once './Animal.php';

class Reptil extends Animal{
    private $corEscama;

    public function locomover(){
        Echo "<P>Reprils geralmente restejam!</p>";
    }

    public function alimentar(){
        Echo "<P>Reptils são onivoros</p>";        
    }

    public function emitirSom(){
        Echo "<P>Reptisl emites som </p>";        
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