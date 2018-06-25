<?php

require_once 'Animal.php';

class Mamifero extends Animal{
     private $corPelo;
    
    //Metodos especiais
    public function getCorPelo(){
        return $this->corPelo;
    }
    
    public function setCorPelo($c){
        $this->corPelo = $c;
    }
    
    //Metodos
    public function alimentar(){
        echo '<p>Mamando..</p>';
    }
    public function emitirSom(){
        echo '<p>Som de mamifiro..</p>';
    }
    public function locomover(){
        echo '<p>Correndo..</p>';
    }
}