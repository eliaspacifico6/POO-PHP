<?php

class Professor extends Pessoa {
        private $escolaridade;
        private $Salario;

        public function __construct($nome, $idade, $sexo, $escolaridade, $salario) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setEscolaridade($escolaridade);
            $this->setSalario($salario);

        }

        public function receberMais($valor){
                $this->setSalario($this->getSalario()+$valor);
            }

        /**
         * Get the value of escolaridade
         */ 
        public function getEscolaridade()
        {
                return $this->escolaridade;
        }

        /**
         * Set the value of escolaridade
         *
         * @return  self
         */ 
        public function setEscolaridade($escolaridade)
        {
                $this->escolaridade = $escolaridade;

                return $this;
        }

        /**
         * Get the value of Salario
         */ 
        public function getSalario()
        {
                return $this->Salario;
        }

        /**
         * Set the value of Salario
         *
         * @return  self
         */ 
        public function setSalario($Salario)
        {
                $this->Salario = $Salario;

                return $this;
        }
}
