<?php

/**
 * Description of Aluno
 *
 * @author Weinny
 */
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    private $ativo;
    
    //Metodos especiais
    public function __contruct(){
        $this->ativo = true;
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }
    public function getAtivo(){
        return $this->ativo;
    }

    public function setMatricula($mat) {
        $this->matricula = $mat;
    }

    public function setCurso($cur) {
        $this->curso = $cur;
    }
    public function setAtivo($a){
        $this->ativo = $a;
    }
    
    //Metodos
    public function cancelarMatricula(){
        $this->setAtivo(false);
        echo '<p>Matricula cancelada.</p>';
    }


}
