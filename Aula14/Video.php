<?php

/**
 * Description of Video
 *
 * @author Weinny
 */

require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
    
    //Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    //Metodos especiais
    public function __construct($ti){
        $this->titulo = $ti;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reprosuzindo = false;
    }
    function getTitulo() {
        return $this->titulo;
    }
    function getAvaliacao() {
        return $this->avaliacao;
    }
    function getViews() {
        return $this->views;
    }
    function getCurtidas() {
        return $this->curtidas;
    }
    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($t) {
        $this->titulo = $t;
    }
    function setAvaliacao($a) {
        $media = ($this->avaliacao + $a) / $this->getViews();
        $this->avaliacao = $media;
    }
    function setViews($v) {
        $this->views = $v;
    }
    function setCurtidas($c) {
        $this->curtidas = $c;
    }
    function setReproduzindo($r) {
        $this->reproduzindo = $r;
    }

    //Metodos abstratos
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
        $this->setReproduzindo(false);
    }

    public function play() {
        $this->setReproduzindo(true);
    }

}
