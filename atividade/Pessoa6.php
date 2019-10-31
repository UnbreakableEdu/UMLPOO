<?php

class Pessoa{
    private $nome;
    private $idade;
    private $contador;


    public function __construct($nome,$idade,$contador){
        $this->nome =$nome;
        $this->idade =$idade;
        $this->contador=$contador;
    }

public function getNome(){
    return $this->nome;
}

public function fazNiver($contador){

    return $this->idade += $this->contador;
}

public function imprimeIdade(){
    return "Parabéns, ".$this->getNome().". Você está completando ".$this->fazNiver($contador)." anos <br>";
}}

$pessoa = new Pessoa("Paulo",59,1);

echo $pessoa -> imprimeIdade();