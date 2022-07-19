<?php

require_once "./AcoesVideo.php";

class Video implements AcoesVideo{
    private $titulo, $avaliacao, $Views, $curtidads, $reproduzindo;

    public function __construct ($titulo) {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidads(0);
        $this->setReproduzindo(false);
    }
 

    public function play(){
        $this->setReproduzindo(True);
        $this->setViews($this->getViews() +1);
    }
    public function pause(){
        $this->setReproduzindo(false);
    }
    public function like(){
        $this->setCurtidads($this->getCurtidads() +1);
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */ 
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     *
     * @return  self
     */ 
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }

    /**
     * Get the value of Views
     */ 
    public function getViews()
    {
        return $this->Views;
    }

    /**
     * Set the value of Views
     *
     * @return  self
     */ 
    public function setViews($Views)
    {
        $this->Views = $Views;

        return $this;
    }

    /**
     * Get the value of curtidads
     */ 
    public function getCurtidads()
    {
        return $this->curtidads;
    }

    /**
     * Set the value of curtidads
     *
     * @return  self
     */ 
    public function setCurtidads($curtidads)
    {
        $this->curtidads = $curtidads;

        return $this;
    }

    /**
     * Get the value of reproduzindo
     */ 
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Set the value of reproduzindo
     *
     * @return  self
     */ 
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }
}