<?php

/**
 *
 * @author Weinny
 */
interface Controlador {
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function almentaVolume();
    public function abaixaVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}
