<?php

require_once 'Animal.php';

class Ave extends Animal{
    private $corPena;
    
    //Metodos especiais
    public function getCorPena(){
        return $this->corPena;
    }
    
    public function setCorPena($c){
        $this->corPena = $c;
    }
    
    //Metodos
    public function alimentar() {
        echo '<p>Comendo fruta..</p>';
    }

    public function emitirSom() {
        echo '<p>Som de ave ..</p>';
    }

    public function locomover() {
      echo '<p>Voando..</p>';  
    }
    
    public function fazerNinho(){
        echo '<p>Constuindo ninho..</p>';
    }

}
