<?php

require_once "Produto.php";
            
$produto = new Produto("0822456", "Activia");

$produto -> setCustoProduto("8.00");
$produto -> setQuantidadeEstoque(1);
$quantiaEstoque =  $produto -> poeEstoque(1);