<?php

require_once './Lutador.php';

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    function marcarLuta($l1 , $l2){
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    
   function lutar() {
        if ($this->aprovado){
            $this->desafiado->apresesentar();
            $this->desafiante->apresesentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case '0':
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;

                case '1':
                    echo "<p>Vitoria do Desafiado {$this->desafiado->getNome()} </p>";
                    $this->desafiado->ganharLuta ();
                    $this->desafiante->perderLuta();
                    break;

                case '2':
                    echo "<p>Vitoria do Desafiante {$this->desafiado->getNome()} </p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;            
               
            }
        }else{
            echo "Luta não pode acontecer!";
        }

        $this->desafiado->status();
        $this->desafiado->status();
    }

    /**
     * Get the value of desafiado
     */ 
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * Set the value of desafiado
     *
     * @return  self
     */ 
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    /**
     * Get the value of desafiante
     */ 
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * Set the value of desafiante
     *
     * @return  self
     */ 
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    /**
     * Get the value of rounds
     */ 
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * Set the value of rounds
     *
     * @return  self
     */ 
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    /**
     * Get the value of aprovado
     */ 
    public function getAprovado()
    {
        return $this->aprovado;
    }

    /**
     * Set the value of aprovado
     *
     * @return  self
     */ 
    public function setAprovado($aprovado)
    {
        $this->aprovado = $aprovado;

        return $this;
    }
}
