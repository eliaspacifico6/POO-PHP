<?php

require_once './Animal.php';

class Mamifero extends Animal{
    private $corPelo;

    public function locomover(){
        Echo "<P>Mamiferos geralmente correm!</p>";
    }

    public function alimentar(){
        Echo "<P>Mamiferos maman</p>";
        
    }

    public function emitirSom(){
        Echo "<P>Emitido soms de Mamiferos</p>";
        
    }
}