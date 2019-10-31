<?php

require_once "Funcionario.php";
require_once "Data.php";

$data1 = new Data("12","06","2000");


//print_r ($data1);
//print_r ($data2);

$usuario1 = new Funcionario("Josemir","Cultural",1000,"000000000-01",$data1);
echo $usuario1->mostra();

echo "<br>";

$data2 = new Data("18","09","2003");

$usuario2 = new Funcionario("Aldo","Financeiro",1200,"000000000-02",$data2);
echo $usuario2;