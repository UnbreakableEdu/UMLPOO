<?php
require "Forma.php";
require "Retangulo.php";
require "Triangulo.php";
$retangulo = new Retangulo(5, 10);
$triangulo = new Triangulo(6, 7);
echo "<strong>Objeto Retangulo</strong> <br>";
echo "A área do Retângulo = " . $retangulo->calcArea() . "<br><br>";
echo "<strong>Objeto Triângulo</strong> <br>";
echo "A área do Triângulo = " . $triangulo->calcArea() . "<br><br>";

?>