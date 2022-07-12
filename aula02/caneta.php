<?php
class Caneta 
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Caneta tampada!</p>";
        } else {
            echo "<p>Estou Rabiscando...</p>";
        }
    }
    function tampar() {
        $this->tampada = true;
        echo "<p>Tampando a caneta! </p>";
    }
    function destampar(){
        $this->tampada = false;
        echo "<p>Destampando a caneta! </p>";
    }
}
