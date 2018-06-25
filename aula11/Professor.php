<?php

require_once 'Pessoa.php';

final class Professor extends Pessoa{
    private $salario, $periodo;
    
    //Metodos especiais
    public function __construct($n,$i,$s){
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }
    
    public function getSalario(){
        return $this->salario;
    }
    public function getPeriodo(){
        return $this->Periodo;
    }
    
    public function setSalario($s){
        $this->salario = $s;
    }
    public function setPeriodo($p){
        $this->periodo = $p;
        if($this->periodo == 'nt'){
            $this->adcNoturno();
        }
    }
    
    //Metodos
    public function receberSalario(){
        echo 'Sacado o salário do mês valor: R$'.$this->getSalario().'</p>';
    }
    public function adcNoturno(){
        $adc = ($this->getSalario() * 10) / 100 ;
        $this->setSalario($this->getSalario() + $adc);
    }
    
}
