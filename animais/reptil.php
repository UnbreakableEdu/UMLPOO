<?php
class Reptil extends Animal{
    private $corEscama;
    
    public function __construct($corEscama){
        $this -> corEscama = $corEscama;
    }
    public function locomover(){
        return "A grande maioria rasteja sobre sua própria barriga.\n";
    }
    public function alimentar(){
        return " Em geral são carnívoros.\n";
    }
    public function emitirSom(){
        return "Em geral guizam, mas fazem poucos barulhos para não deixar as presas atentas. <br>";
    }
}