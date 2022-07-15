<?php
require_once "./Mamifero.php";

class Canguru extends Mamifero{
    public function usarBolsa(){
        echo "<p>Cangurus possuem Bolsas</p>";
    }   
    public function locomover(){
        echo "<p>Cangurus apenas Saltam</p>";
    }
}
