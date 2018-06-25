<?php
/**
 * Description of Lutador
 *
 * @author Weinny
 */
class Lutador {
    //Atributos
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Metodos especiais
    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->nome = $no;
        $this->nascionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getNascionalidade(){
        return $this->nascionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }
    
    public function setNome($no){
        $this->nome = $no;
    }
    public function setNascionalidade($na){
        $this->nascionalidade = $na;
    }
    public function setIdade($id){
        $this->idade =$id;
    }
    public function setAltura($al){
        $this->altura = $al;
    }
    public function setPeso($pe){
        $this->peso = $pe;
        $this->setCategoria();
    }
    private function setCategoria(){
        if($this->peso < 52.2 ){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    public function setVitorias($vi){
        $this->vitorias = $vi;
    }
    public function setDerrotas($de){
        $this->derrotas = $de;
    }
    public function setEmpates($em){
        $this->empates = $em;
    }
    //Metdos 
    public function apresentar(){
        echo "<p>------------------------------------</p>";
        echo "Chegou a Hora! agora com vocês o lutador " . $this->getNome();
        echo ", Veio diretamente de " . $this->getNascionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " Kg ";
        echo "<br>Possui " . $this->getVitorias() . " Vitórias, " . 
                $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . 
                " Empates <br>";
    }
    public function status(){
        echo "<p>------------------------------------</p>";
        echo $this->getNome() . " é um peso " . $this->getCategoria() ;
        echo " e já ganhou ".$this->getVitorias(). ' Vezes,';
        echo " Perdeu " .$this->getDerrotas(). ' Vezes, ';
        echo " Empatou ".$this->getEmpates() . ' Vezes';
        
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderluta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}
