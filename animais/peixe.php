<?php
class Peixe extends Animal{
    private $corEscama;

    public function __construct($corEscama){
        $this -> corEscama = $corEscama;
    }
    public function locomover(){
        return "Ele se locomove nadando.\n";
    }
    public function alimentar(){
        return "Ele se alimenta de alga, plantas aquáticas, ovos de peixes, peixes menores e pequenos crustáceos.\n";
    }
    public function emitirSom(){
        return "Ele faz glup glup.<br>";
    }
    public function soltarBolhas(){
        return "Soltam bolhas quando estão preparados para procriação.";
        }
}