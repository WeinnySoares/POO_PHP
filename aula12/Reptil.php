<?php

require_once 'Animal.php';

class Reptil extends Animal{
    private $corEscama;
    
    //Metodos especiais
    public function getCorEscama(){
        return $this->corEscama;
    }
    
    public function setCorEscama($c){
        $this->corEscama = $c;
    }
    //Metodos
    public function alimentar() {
        echo '<p>Comendo vegetais..</p>';
    }

    public function emitirSom() {
        echo '<p>Som de reptil..</p>';
    }

    public function locomover() {
        echo '<p>Rastejando..</p>';
    }

}
