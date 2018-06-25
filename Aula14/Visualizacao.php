<?php

/**
 * Description of Visualizacao
 *
 * @author Weinny
 */

require_once 'Gafanhoto.php';
require_once 'Video.php';

class Visualizacao {
    //Atributos
    private $espectador;
    private $filme;
    
    //Metodos especiais
    public function __construct($g,$v){
        $this->setEspectador($g);
        $this->setFilme($v);
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    public function getEspectador(){
        return $this->espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    
    public function setEspectador($e){
        $this->espectador = $e;
    }
    public function setFilme($f){
        $this->filme = $f;
    }
    
    //Metodos
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($n){
        $this->filme->setAvaliacao($n);
    }
    public function avaliarPorc($p){
        if($p <= 0){
            echo "<p>erro! Valor $p invalido!</p>";
        }elseif($p <= 20){
            $nova = 3;
        }elseif($p <= 50){
            $nova = 5;
        }elseif($p <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
}   

