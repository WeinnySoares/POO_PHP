<?php

/**
 * Description of ContaBanco
 *
 * @author Weinny
 */
class ContaBanco {
    
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    //Construtor
    public function __construct(){
        $this-> setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }
    
    //Metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "cc"){
            $this->setSaldo(50);
        }elseif($t == "cp"){
            $this->setSaldo(150);
        }else{
            echo "<p>Erro tipo $t invalido.</p>";
        }
    }
    public function fecharConta(){
        if($this->saldo > 0){
            echo "<p>Conta com dinheiro</p>";
        }elseif($this->saldo < 0){
            echo "<p>Conta em debito</p>";
        }else{
            $this->setStatus(false);
            echo "<p>Conta do cliente ".$this->getDono()." fechada com sucesso</p>";
        }
    }
    public function depositar($v){
        if($this->status == true){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de $v na conta do cliente ".$this->getDono()."</p>";
        }else{
            echo "<p>Impossível depositar, a conta está desativada</p>";
        }
    }
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "Saque de $v autorizado na conta do cliente ".$this->getDono()."</p>";
            }else{
                echo "<p>Saldo insuficiente para saque</p>";
            }
        }else{
            echo "<p>Não posso sacar de uma conta desativada.</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "cc"){
            $v = 12;
        }else if ($this->getTipo() == "cp"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada da conta do cliente".$this->getDonto()."</p>";
        }else {
            echo "<p>Erro a conta esta desativada.</p>";
        }
    }
    
    //metodos especiais
    public function setnumConta($n){
        $this->numConta = $n;
    }
    public function getnumConta(){
        return $this->numConta;
    } 
    public function setTipo($t){
        $this->tipo = $t;
    }
    function getTipo() {
        return $this->tipo;
    }     
    public function setDono($d){
        $this->dono = $d;
    }
    public function getDono(){
       return $this->dono;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setStatus($st){
        $this->status = $st;
    }
    public function getStatus(){
        return $this->status;
    }
}
