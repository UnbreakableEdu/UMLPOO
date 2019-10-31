<?php

class Usuario
{
// as propriedades
public $primeiroNome;
// metodo que diz Ola ao usuario
public function hello()
{
return "Olá, eu sou " . $this->primeiroNome;
}
}

$user1 = new Usuario();

$user1->primeiroNome = "Fulano";

echo $user1->hello();