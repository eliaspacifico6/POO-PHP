<?php

require_once './Pessoa.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setMatricula($matricula);
        $this->setCurso($curso);
    }

    public function pagarMensalidade()  {
        echo "<p>Aluno {$this->getNome()} pagou mensalidade</p>";
    }
    

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
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
