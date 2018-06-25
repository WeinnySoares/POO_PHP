<?php

/**
 * Description of ControleRemoto
 *
 * @author Weinny
 */
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;
    //metodos especiais
    function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    
    private function setVolume($v){
        $this->volume = $v;
    }
    private function setLigado($l){
        $this->ligado = $l;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }
    
    // metodos da interface
    public function almentaVolume() {
        if( $this->getLigado() ){
            $this->setVolume($this->getVolume() +5);
        }else{
            echo "<p>Erro, não poço almentar. estou desligada.</p>";
        }
    }
    public function abaixaVolume() {
        if( $this->getLigado() ){
            $this->setVolume($this->getVolume() -5) ;
        }else{
            echo "<p>Erro! não poço diminuir. estou desligada.</p>";
        }
    }

    public function abrirMenu() {
        echo "<p>__Menú__</p>";
        echo "<p>Está ligado? ".($this->getLigado()?"sim":"não")."</p>" ;
        echo "<p>Está tocando? ".($this->getTocando()?"sim":"não")."</p>";
        echo "<p>Volume ".$this->getVolume()." -";
        
        for($i = 0;$i <= $this->getVolume();$i+=10){
            echo "|";
        }
        echo "+<br>";
    }
    public function fecharMenu() {
        echo "Fechando menú";
    }
    
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    
    public function ligarMudo() {
        if ($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() and $this->getVolume() == 0){
            $this->setVolume(50) ;
        }
    }

    public function play() {
        if ($this->getLigado() and !($this->getTocando()) ){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if ($this->getligado() and $this->getTocando() ){
            $this->setTocando(false);
        }
    }
    
}
