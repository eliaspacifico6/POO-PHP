<?php

    class Lutador  {
        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        // Metodos Internos
        function apresesentar() {
            echo "<p>----------------------------------------</p>";
            echo "<p>Chegou a Hora!!! <br>";
            echo "O lotador {$this->getNome()},de {$this->getIdade()} anos, {$this->getnacionalidade() } <br>";
            echo "Pesando {$this->getPeso()} kilos, tem {$this->getVitorias()} Vitórias, {$this->getDerrotas()} Derrotas e  {$this->getEmpates()} Empates 
            ";
            echo "</p>";
        } 
        function status() {
            echo "<p>----------------------------------------</p>";
            echo "<p> {$this->getNome()} {$this->getIdade()} anos, {$this->getnacionalidade() } <br>";
            echo "Peso: {$this->getPeso()} kilos, <br>";
            echo "Vitórias: {$this->getVitorias()}<br>";
            echo "Derrotas: {$this->getDerrotas()} <br>";
            echo "Empates: {$this->getEmpates()} </p>";
        } 
        function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        } 
        function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);

        } 
        function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        } 

        public function novoPeso($peso){
            if ($peso > $this->getPeso()) {
                echo "Lutador engordou ".  $peso - $this->getPeso() . " Kilos<br>";
            } else {
                
                echo "Lutador emagreceu ".  $this->getPeso() - $peso . " Kilos<br>";
            }

            $this->setPeso($peso);

        echo "Sua categora é :{$this->getCategoria()}<br>";
        }


        // Metodos Especiais
        
        function __construct ($no,$na,$id,$al,$pe,$vi,$de,$em)  {
            $this->nome = $no;
            $this-> nacionalidade = $na ;
            $this-> idade = $id ;
            $this-> altura = $al ;
            $this->setPeso($pe);
            $this-> vitorias = $vi ;
            $this-> derrotas = $de ;
            $this-> empates  = $em ;

        } 

         function getNome(){
            return $this->nome;
        }
         function getNacionalidade(){
            return $this->nacionalidade;
        }
         function getIdade(){
            return $this-> idade;
        }
         function getAltura(){
            return $this->altura;
        }
         function getPeso(){
            return $this->peso;
        }
         function getCategoria(){
            return $this->categoria;
        }
         function getVitorias(){
            return $this->vitorias;
        }
         function getDerrotas(){
            return $this->derrotas;
        }
         function getEmpates(){
            return $this->empates;
        }

        

        public function setNome($no){
            $this->nome = $no ;
        }
        public function setNacionalidade($na){
            $this->nacionalidade = $na ;
        }
        public function setIdade($id){
            $this->idade = $id ;
        }
        public function setAltura($al){
            $this->altura = $al ;
        }
        public function setPeso($pe){
            $this->peso = $pe ;
            $this->setCategoria();
        }

        public function setCategoria(){
                      
           if  ($this->peso < 52.2 ){
                $this->categoria = 'Invalido';
           }elseif ($this->peso <= 70.3 ) {            
                $this->categoria = 'Leve';
           }elseif ($this->peso <= 83.9 ) {            
                $this->categoria = 'Médio';
           }elseif ($this->peso <= 120.2 ) {            
                $this->categoria = 'Pesado';
           } else {
                $this->categoria = 'Invalido';
           }
        }
        public function setVitorias($vi){
            $this->vitorias = $vi ;
        }
        public function setDerrotas($de){
            $this->derrotas = $de ;
        }
        public function setEmpates($em){
            $this->empates = $em ;
        }

    }
  