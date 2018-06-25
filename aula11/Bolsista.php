<?php

require_once 'Aluno.php';

final class Bolsista extends Aluno{
    private $bolsa;
    
    //Metodos especiais
    public function getBolsa(){
        return $this->bolsa;
    }
    
    public function setBolsa($b){
        $this->bolsa = $b;
    }
    
    //Metodo
    public function renovarBolsa(){
        echo '<p>Bolsa renovada.</p>';
    }
    public function pagarMensalidade(){
        echo $this->getNome().' é Bolsista então paga com desconto Valor do deseconto: '.$this->bolsa.'% </p>';
    }
    
}
