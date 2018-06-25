<?php

/**
 * Description of Funcionario
 *
 * @author Weinny
 */

require_once 'Pessoa.php';    
class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;
    
    //Metododos especiais
    public function getSetor(){
        return $this->setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    
    public function setSetor($s){
        $this->setor = $s;
    }
    public function setTrabalhando($t){
        $this->trabalhando = $t;
    }
    
    //Metodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
    
}
