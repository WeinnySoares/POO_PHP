<?php

class Pessoa{
    //Atributos
    private $nome, $idade, $sexo;
    
    //Metodos especiais
    public function __construct($n,$i,$s){
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    
    public function setNome($n){
        $this->nome = $n;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }
    
    //Metodos
    
    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
        echo '<p>Parabéns Feliz aniversário '.$this->getNome().' !</p>';
    }
    public function ler(){
        echo "estou lendo.";
    }
    public function detalhe(){
        echo '______Pessoa______';
        echo '<p>Nome: '.$this->getNome().'</p>';
        echo '<p>Idade: '.$this->getIdade().'</p>';
        echo '<p>Sexo: '.$this->getSexo().'</p>';
        
    }
    
}