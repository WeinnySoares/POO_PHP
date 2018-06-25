<?php

require_once 'Animal.php';

class Mamifero extends Animal{
    //Atributos
    protected $corPelo;
    public function emitirSom() {
        echo '<p>Som de Mamifero..</p>';
    }

}
