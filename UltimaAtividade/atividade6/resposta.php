<?php

require_once "Estudante.php";

$aluno1 = new Estudante(99993, "Hugh James", "23/03/2001", 600);
echo $aluno1;

$aluno2 = new Estudante(99995, "Hugo Carlos", "20/07/2002", 750);
echo "<br/>". $aluno2;
echo "<br/>". $aluno1->getNumEstudantes();