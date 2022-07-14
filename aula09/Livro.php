
<?php
require_once './Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $categoria;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function __construct($titulo, $autor, $categoria, $totPag)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPag($totPag);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor(null);
    }

    public function Le($pesoa){
        $this->setLeitor($pesoa);
        $this->setPagAtual('1');
    }

    
    public function abrir(){
        $this->setAberto(true);
        if ( $this->getPagAtual() == 0) {
            $this->setPagAtual(1);
        }
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folear($pagina){
        if ($pagina > $this->getTotPag() || $pagina <=0){
            $this->fechar();
        }else{
           $this->setPagAtual($pagina); 
           $this->abrir();
        }
                
    }
    public function avancarPag(){
        $this->setPagAtual($this->getPagAtual()+1);
        $this->abrir();
    }
    public function voltarPag(){ 
        if ($this->getPagAtual() > 1 && ($this->getAberto()) ){
           $this->setPagAtual($this->getPagAtual()-1);
        }else{
            $this->fechar();
            $this->setPagAtual(0);
        }
            
    }

    public function detales(){
        echo " <p>O livro {$this->getTitulo()}, escrito por {$this->getAutor()}, é um(a) {$this-> getCategoria()} de {$this->getTotPag()} pagina <br>";

        if ($this->getLeitor()){
            echo "Esta em posse de {$this->getLeitor()->getNome()}, um(a)  {$this->getLeitor()->getSexo()} de {$this->getLeitor()->getIdade()} Anos. <br>";
            if ($this->aberto){
                 echo "Atualmente Ele está lendo a pagina ".  $this->getPagAtual(). "</p>";
            }else{
                echo "No momento o Livro se encotra Fechado </p>";
            }
            
           
        } else {
            echo "E no momento está disponivel. </p>";
        }
    }


    /**
     * Get the value of leitor
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     *
     * @return  self
     */
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }

    /**
     * Get the value of aberto
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     *
     * @return  self
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPag
     */
    public function getTotPag()
    {
        return $this->totPag;
    }

    /**
     * Set the value of totPag
     *
     * @return  self
     */
    public function setTotPag($totPag)
    {
        $this->totPag = $totPag;

        return $this;
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
     * Get the value of pagAtual
     */ 
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     *
     * @return  self
     */ 
    private function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    /**
     * Get the value of categoria
     */ 
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */ 
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}
