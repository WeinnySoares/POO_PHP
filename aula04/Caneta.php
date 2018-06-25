<?php
/**
 * Description of Caneta
 *
 * @author Weinny
 */
class Caneta {
    //put your code here
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
    //Metodo construtor.
    //Lembrate o metodo construtor pode ser realizado usando o nomedaclasse()
    //ou usando o nome especial __construct().
    /*
     * 
    public function Caneta() {
        $this-> cor = "Azul";
        $this->tampar();
    }
    */
    /* O metodo construtor a seguir permite inicializar o objeto mo momento 
     * da instaciação*/
    public function Caneta($m, $p, $c){//Metodo contrutor da classe.
    // aqui posso acessar diretamento os atributos ou usar metodos construtores.
        $this->modelo = $m;
        $this->ponta = $p;
        $this->cor = $c;
        $this->tampar();
    }
    //Metodo da classe
    public function tampar(){
        $this->tampada = true;
    }
    
    //Metodos especiais
    public function getModelo(){
        return $this->modelo; 
    }
    public function setModelo($m){
        $this-> modelo = $m;
    }
    public function getPonta(){
        return $this-> ponta;
    }
    public function setPonta($p){
        $this-> ponta = $p;
    }
    
}
