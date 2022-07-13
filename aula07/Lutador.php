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

        } 
        function status() {

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

        // Metodos Especiais
        
        function __construct ($no,$na,$id,$al,$pe,$vi,$de,$em)  {
            $this->nome = $no;
            $this-> nacionalidade = $na ;
            $this-> idade = $id ;
            $this-> altura = $al ;
            $this-> peso = $pe ;
            $this-> vitorias = $vi ;
            $this-> derrotas = $de ;
            $this-> empates  = $em ;

        } 

        private function getNome(){
            return $this->nome;
        }
        private function getNacionalidade(){
            return $this->nacionalidade;
        }
        private function getIdade(){
            return $this-> idade;
        }
        private function getAltura(){
            return $this->altura;
        }
        private function getPeso(){
            return $this->peso;
        }
        private function getCategoria(){
            return $this->categoria;
        }
        private function getVitorias(){
            return $this->vitorias;
        }
        private function getDerrotas(){
            return $this->derrota;
        }
        private function getEmpates(){
            return $this->empates;
        }

        

        private function setNome($no){
            $this->nome = $no ;
        }
        private function setNacionalidade($na){
            $this->nacionalidade = $na ;
        }
        private function setIdade($id){
            $this->idade = $id ;
        }
        private function setAltura($al){
            $this->altura = $al ;
        }
        private function setPeso($pe){
            $this->peso = $pe ;
            $this-> setCategoria();
        }
        private function setCategoria(){
           if  ($this->getPeso() < 52.2 ){
                $this->categoria = 'Invalido';
           }elseif ($this->getPeso() < 70.3 ) {            
                $this->categoria = 'Leve';
           }elseif ($this->getPeso() < 83.9 ) {            
                $this->categoria = 'Médio';
           }elseif ($this->getPeso() < 12.2 ) {            
                $this->categoria = 'Pesado';
           } else {
                $this->categoria = 'Invalido';
           }
        }
        private function setVitorias($vi){
            $this->vitorias = $vi ;
        }
        private function setDerrotas($de){
            $this->derrotas = $de ;
        }
        private function setEmpates($em){
            $this->empates = $em ;
        }

    }
  