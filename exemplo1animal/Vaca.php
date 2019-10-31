<?php
class Vaca extends Animal {
private $dono;
public function __construct($familia, $comida) {
parent::__construct($familia, $comida);
}
public function setDono($dono) {
$this->dono = $dono;
}
public function getDono() {
return $this->dono;
}
}
?>