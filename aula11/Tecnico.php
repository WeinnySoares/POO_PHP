<?php

require_once 'Aluno.php';

final class Tecnico extends Aluno{
    
    private $hrsPratica;
    
    //Metodos especiais
    public function __construct($n, $s, $i){
        $this->setNome($n);
        $this->setSexo($s);
        $this->setIdade($i);
    }
    
    public function getHrsPraticas(){
       return $this->hrsPratica;
    }
    
    private function setHrsPraticas($hp){
        $this->hrsPratica = $hp;
    }
    
    //Metodos
    public function praticar(){
        $this->setHrsPraticas($this->getHrsPraticas() + 6);
    }
    
    
}
