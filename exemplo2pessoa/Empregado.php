<?php
require_once 'Pessoa.php';
class Empregado extends Pessoa {
private $salario;
public function __construct($priNome, $ultNome, $salario){
parent::__construct($priNome, $ultNome);
$this->salario = $salario;
}

public function getSalario(){
return $this->salario;
}

public function printInfo(){
return 'Nome: ' . $this->priNome . '<br> Salario: ' . $this->getSalario();
}
}