<?php

abstract class Animal {
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
        $this->Peso = $p;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function setMembros($m){
        $this->membros = $m;
    }
    
    //Metodos
    abstract public function alimentar();
    abstract public function emitirSom();
    abstract public function locomover();
}
