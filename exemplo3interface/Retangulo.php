<?php
require_once "Forma.php";
class Retangulo implements Forma {

private $base;
private $altura;
public function __construct ($base, $altura) {

$this->base = $base;
$this->altura = $altura;

}
public function calcArea() {

return $this->base * $this->altura;

}

}