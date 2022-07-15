<?php

require_once './Pessoa.php';
    

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matricula,$curso) {
        $this->setMatricula($matricula);
        $this->setcurso($curso);
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        
    }
       

    public function cancelarMatr()
    {
        $this->setMatricula(true);
    }

    /**
     * Get the value of curso
     */ 
    public function getcurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setcurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
}
