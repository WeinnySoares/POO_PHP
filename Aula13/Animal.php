<?php


abstract class Animal {
    //Atreibutos
    protected $peso, $idade, $membros;
    
    //Metodos especiais
    public function getPeso(){
        return $this->peso;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getMembros(){
        return $this->membros;
    }
    
    public function setPeso($p){
        $this->peso = $p;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function setMembros($m){
        $this->membros = $m;
    }
    
    //Metodo
    public abstract function emitirSom();
}
