<?php

require_once 'Animal.php';

class Peixe extends Animal{
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
        echo '<p>Comendo substancia..</p>';
    }

    public function emitirSom() {
        echo '<p>Peixe não emite som..</p>';
    }

    public function locomover() {
        echo '<p>Nadando..</p>';
    }
    public function soltarBolha(){
        echo '<p>Soltou uma bolha..</p>';
    }

}
