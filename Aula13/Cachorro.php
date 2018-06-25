<?php

require_once 'Lobo.php';
class Cachorro extends Lobo {
    //@sobrepor
    public function emitirSom(){
        echo '<p>AU. Au. Au. </p>';
        
    }
    //Não é possivel usar sobrecarga no php por isso estou usando metodos diferentes.
    public function reagirFrase($frase){
        if($frase == 'Vamos brincar' || $frase == 'Vem comer' || $frase == 'Olá'){
            echo '<p>Abanando o rabo e latindo..</p>';
        }else{
            echo '<p>Rosnando ..</p>';
        }
    }
    
    public function reagirHora($hora,$min){
        if($hora >= 6 ){
            echo '<p>Abanando o rabo e latindo..</p>';
        }else if($hora >= 18){
            echo '<p>Abanando o rabo </p>';
        }else if ($hora >=22){
            echo '<p>Não demostrou reação</p>';
        }else{
            echo '<p>Não demostrou reação</p>';
        }
        
    }
    
    public function reagirDono($dono){
        if($dono == true){
            echo '<p>Abanando o rabo e latindo...</p>';
        }else {
            echo '<p>Rosnando e latindo...</p>';
        }
    }
    
    public function reagirIdadePeso($idade, $peso){
        if ($idade <= 5){
            if($peso <= 8.0){
                echo '<p>Abanando o rabo e latindo e correndo...</p>';
            }else{
                echo '<p>latir..</p>';
            }
        }elseif($idade <= 10 ){
            if ($peso <= 10.0 ){
                echo '<p>Abanando o rabo e latindo...</p>';
            }else {
                echo '<p>latir e morder..</p>';
            }
        }elseif($idade <= 12 ){
            if($peso <= 12.0){
                echo '<p>Abanando o rabo..</p>';
            }else{
                echo '<p>Não demonstrou reação..</p>';
            }
        }
    }
}
