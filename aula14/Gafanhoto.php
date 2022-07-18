<?php

require_once "./Pessoa.php";

class Gafanhoto extends Pessoa {
    private $login, $totAssistidos;

    function viuMaisUm(){
        $this->setTotAssistidos($this->getTotAssistidos() +1);
        $this->ganharExp();
    }



    /**
     * Get the value of totAssistidos
     */ 
    public function getTotAssistidos()
    {
        return $this->totAssistidos;
    }

    /**
     * Set the value of totAssistidos
     *
     * @return  self
     */ 
    public function setTotAssistidos($totAssistidos)
    {
        $this->totAssistidos = $totAssistidos;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }
}
    