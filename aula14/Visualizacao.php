<?php 

require_once "./Video.php";
require_once "./Gafanhoto.php";

class Visualizacao {
    private $espectador, $filme;

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->getEspectador()->viuMaisUm() ;
        $this->getFilme()->play();
    }


    /**
     * Get the value of espectador
     */ 
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @return  self
     */ 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }
}