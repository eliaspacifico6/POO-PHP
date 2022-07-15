<?php 

require_once './Pessoa.php';

class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;
    
    function __construct($nome, $idade, $sexo, $setor, $trabalhando)    {
        
        $this->SetNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setSetor($setor);
        $this->setTrabalhando($trabalhando);
    }

    public function mudarTrabalho($novoTrabalho)
    {
        $this->setTrabalhando($novoTrabalho);
    }


    /**
     * Get the value of setor
     */ 
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */ 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */ 
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     *
     * @return  self
     */ 
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}
