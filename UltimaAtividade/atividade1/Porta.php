<?php

class Porta {
    private $marca;
    private $largura;
    private $altura;
    static $totalPortas = 0;

    public function __construct($marca,$largura,$altura){
        $this->marca =$marca;
        $this->largura =$largura;
        $this->altura=$altura;
        Porta::$totalPortas = Porta::$totalPortas+1;
    }

    public function __toString(){
        return "Área = ".($this->altura * $this->largura);
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function getTotalPortas()
    {
        return Porta::$totalPortas;
    }
}