<?php
class Ave extends Animal{
    private $corPena;

    public function __construct($corPena){
        $this -> corPena = $corPena;
    }
    public function locomover(){
        return "Ele se locomove voando.\n";
    }
    public function alimentar(){
        return "Ele se alimenta de sementes.\n";
    }
    public function emitirSom(){
        return "Ele faz piu piu.<br>";
    }
}