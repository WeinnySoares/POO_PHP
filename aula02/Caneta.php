<?php

/**
 * Description of Caneta
 *
 * @author Weinny
 */
class Caneta {
    var $modelo;
    var $cor;
    var $carga;
    var $ponta;
    var $tampada;
    
    function rabiscar(){
       if($this->tampada == true ){
           echo "ERRO NÃO POSSO RABISCAR, ESTOU TAMPADA...";
       }else{
           echo "<p>ESTOU RABISCANDO ...</p>";   
       }
    }
    function tampar(){
       $this->tampada = true; 
    }
    function destampar(){
       $this->tampada = false;        
    }
    
}
