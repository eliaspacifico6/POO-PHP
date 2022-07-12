<?php
class Caneta 
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>Caneta tampada!</p>";
        } else {
            echo "<p>Estou Rabiscando...</p>";
        }
    }
    public function tampar() {
        $this->tampada = true;
        echo "<p>Tampando a caneta! </p>";
    }
    public function destampar(){
        $this->tampada = false;
        echo "<p>Destampando a caneta! </p>";
    }
}
