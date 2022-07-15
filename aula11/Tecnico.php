<?php
require_once './Aluno.php';

class Tecnico extends Aluno {
    private $registo;

    public function praticar(){
        echo "<p>Tecnico {$this->getNome()} Praticando....</p>";
    }
}