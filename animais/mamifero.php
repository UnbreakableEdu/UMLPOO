<?php
class Mamifero extends Animal{
    private $corPelo;
    
    public function __construct($corPelo){
        $this -> corPelo = $corPelo;
    }
    public function locomover(){
        return "Ele se locomove andando.\n";
    }
    public function alimentar(){
        return "Ele se alimenta de carne, verduras ou frutas.\n";
    }
    public function emitirSom(){
        return "Ele pode latir, rugir, mugir e etc.<br>";
    }
}