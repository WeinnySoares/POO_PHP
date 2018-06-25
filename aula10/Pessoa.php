<?php
/**
 * Description of Pessoa
 *
 * @author Weinny
 */
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    //Metodos especiais
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function setIdade($i) {
        $this->idade = $i;
    }

    public function setSexo($s) {
        $this->sexo = $s;
    }
    
    //Metodos 
    public function fazerAniv(){
        $this->idade ++;
    }
    
}
