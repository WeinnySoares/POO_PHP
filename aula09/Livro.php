<?php
/**
 * Description of Livro
 *
 * @author Weinny
 */
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro  implements Publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    private $pagMarcada, $marcarPag;
    
    //Metodos especiais
    function __construct($ti, $au, $to) {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $to;
        $this->fechar();
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }
    public function getPagMarcada(){
        return $this->pagMarcada;
    }
    public function getMarcarPag(){
        return $this->marcarPag;
    }

    public function setTitulo($t) {
        $this->titulo = $t;
    }

    public function setAutor($at) {
        $this->autor = $at;
    }

    public function setTotPaginas($totPag) {
        $this->totPaginas = $totPag;
    }

    public function setPagAtual($pa) {
        $this->pagAtual = $pa;
    }

    public function setAberto($ab) {
        $this->aberto = $ab;
    }

    public function setLeitor($p) {
        $this->leitor = $p;
    }
    
    public function setPagMarcada(){
        $this->pagMarcada = $this->getPagAtual();
    }
    public function setMarcarPag(){
        $this->marcarPag = true;
    }

    //Metodos da interface
    public function abrir(){
        if(!$this->getLeitor() ){
            echo '<p>Erro! é necessario ter um leitor para ler o livro.</p>';
        }else{
            $this->setAberto(true);
            $this->setPagAtual(1);
        }
        
    }
    public function fechar(){
        if( $this->getMarcarPag() ){
            $this->setPagMarcada();
        }
        $this->setAberto(false);
        $this->setPagAtual(0);
    }
    public function folhear($p){
        $this->setPagAtual($p);
    }
    public function avancarPag(){
        if ($this->getAberto() && $this->getPagAtual() < $this->getTotpaginas() && $this->getPagAtual() >= 0){
            $this->setPagAtual($this->getPagAtual() +1);
        }else{
            $this->setPagAtual(0);
        }
    }
    public function voltarPag(){
        if ($this->getAberto() && $this->getPagAtual() > 0 && $this->getPagAtual() <= $this->getTotPaginas() ){
            $this->setPagAtual($this->getPagAtual() -1);
        }else{
            $this->setPagAtual($this->getTotPaginas() );
        }
    }
    
    //metodos da classe
    
    public function pagMarcada(){
        $this->setPagAtual( $this->getPagMarcada() );
    }
    
    
    public function detalhes(){
        echo '<p>________Livro_________</P>';
        echo '<p>Título: '.$this->getTitulo().'</p>';
        echo '<p>Autor: '.$this->getAutor().'</p>';
        echo '<p>Total de páginas: '.$this->getTotPaginas().'</p>';
        if($this->getLeitor()){
            echo '<p>Está sendo Lido por: '.$this->leitor->getNome() .'</p>';
        }
        echo  '<p>Aberto ? ';
        echo $this->getAberto() ? 'Sim':'Não'.'</p>';
        echo '<p>Está na página: '.$this->getPagAtual().'</p>';
    }
    
}
