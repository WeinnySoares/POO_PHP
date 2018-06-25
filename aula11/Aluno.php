<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    protected $matricula, $curso;
     
    //Metodos especiais
    public final function getMatricula(){
        return $this->matricula;
    }
    public final function getCurso(){
        return $this->curso;
    }
    
    public final function setMatricula($m){
        $this->matricula = $m;
    }
    public final function setCurso($c){
        $this->curso = $c;
    }
    
    //Metodos
    public function pagarMensalidade(){
        echo '<p>Pagando mensalidade do aluno'.$this->getNome().'</p>';
    }
}
