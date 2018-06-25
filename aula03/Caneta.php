<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author Weinny
 */
class Caneta {
    //put your code here
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
       if($this->tampada == true ){
           echo "ERRO NÃO POSSO RABISCAR, ESTOU TAMPADA...";
       }else{
           echo "<p>ESTOU RABISCANDO ...</p>";   
       }
    }
    public function tampar(){
       $this->tampada = true; 
    }
    public function destampar(){
       $this->tampada = false;        
    }
    
}
