<?php
    class ContaTelefone {

    private $nomeUsuario;
    private $numero;
    static $totalContas;

    public function __construct($nomeUsuario, $numero) {          
        $this -> nomeUsuario = $nomeUsuario;
        $this -> numero = $numero;
        ContaTelefone::$totalContas++;
    }
    public function gettotalContas() {
    return '<br/>Número total de contas cadastradas: ' .  ContaTelefone::$totalContas;
    }
    public function __toString() {
    return 'Usuário: ' . $this -> nomeUsuario . ' ' . '<br/>Número: ' . $this -> numero;
            
    }
    }
