<?php

/**
 * Description of Gafanhoto
 *
 * @author Weinny
 */

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    
    //Atributos
    private $login;
    private $totAssistido;
    
    //Metodos especiais
    public function __construct($n, $i, $s, $l){
        parent::__construct($n, $i, $s);
        $this->login = $l;
        $this->totAssistido = 0;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
    
    public function setLogin($l){
        $this->login = $l;
    }
    public function setTotAssistido($t){
        $this->totAssistido = $t;
    }
}
