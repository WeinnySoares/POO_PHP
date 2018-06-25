<?php
/**
 * Description of Luta
 *
 * @author Weinny
 */
require_once 'Lutador.php';

class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Metodos especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($dd) {
        $this->desafiado = $dd;
    }

    function setDesafiante($dt) {
        $this->desafiante = $dt;
    }

    function setRounds($ro) {
        $this->rounds = $ro;
    }

    function setAprovada($ap) {
        $this->aprovada = $ap;
    }

        
    //Metodos públicos
    public function marcarLuta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 <> $l2){
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            //echo "não aprovado";
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    public function lutar(){
        if( $this->getAprovada() ){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0://Empate
                    echo '<p>Empatou!</p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1://Desafiado vence
                    echo '<p>'. $this->desafiado->getNome().' venceu! </p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2://Desafiante vence
                    echo '<p>'.$this->desafiante->setNome().' venceu! </p>';
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }else{
            echo "<p>Luta não poderá ocorrer</p>";
        }
    }
    
}
