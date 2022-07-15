<?php

require_once './Pessoa.php';

class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    private $receberAumento;

    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);
        
    }

    public function ReceberAumento($aumento)
    {
        $this->setSalario($this->getSalario()+$aumento); 
    }

   
    /**
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of especialidade
     */ 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @return  self
     */ 
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }
}
