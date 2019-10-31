<?php
abstract class Pessoa {
protected $priNome;
protected $ultNome;
public function __construct($priNome, $ultNome){
$this->priNome = $priNome;
$this->ultNome = $ultNome;
}
abstract public function getSalario();
}