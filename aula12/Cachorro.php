<?php
require_once "./Mamifero.php";

class Cachorro extends Mamifero{
    public function enterrarOsso(){
        echo "<p>Cachorro gostam de enterrar osso</p>";
    }   
    public function abanarRabo(){
        echo "<p>canhorro abanam mais o rabo qunado esta feliz</p>";
    }    
}