<?php

require_once './Animal.php';

class Ave extends Animal{
    private $corPena;

    public function locomover(){
        Echo "<P>Aves geralmente Voão!</p>";
    }

    public function alimentar(){
        Echo "<P>Aves gostam de sementes</p>";        
    }

    public function emitirSom(){
        Echo "<P>Aves cantam ou piam</p>";        
    }

    public function fazerNinho(){
        Echo "<P>Aves fazem Ninhos</p>";        
    }



    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}