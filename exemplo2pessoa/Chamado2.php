<?php
require_once 'Empregado.php';
require_once 'Empreiteiro.php';
$emp1 = new Empregado('Luke','Skywalker',5000);
echo $emp1->printInfo();

echo '<br>';
$emp2 = new Empreiteiro('Han', 'Solo', 75, 175);
echo $emp2->printInfo();