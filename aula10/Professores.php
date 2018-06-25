<?php

/**
 * Description of Professores
 *
 * @author Weinny
 */

require_once 'Pessoa.php';
class Professores extends Pessoa{
    private $especialidade;
    private $salario;
    
    //Metodos especiais
    public function __contruct(){
        
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    
    public function setEspecialidade($e){
        $this->especialidade = $e;
    }
    public function setSalario($s){
        $this->salario = $s;
    }
    
    //Metodos
    public function receberAumento($v){
        $this->setSalario($v);
    }
}
