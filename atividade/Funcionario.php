<?php
require_once "Data.php";
class Funcionario {
    private $nome;
    private $departamento;
    private $salario;
    private $dataAdmissao;
    private $CPF;

    public function __construct($nome,$departamento,$salario,$CPF,Data $data1){
        $this->nome =$nome;
        $this->departamento =$departamento;
        $this->salario=$salario;
        $this->dataAdmissao =$data1->getDataAdmissao();
        $this->CPF = $CPF;
    }

    public function getNome(){
        return $this->nome;

    }
    public function getDepartamento(){
        return $this->departamento;

    }
    public function getCPF(){
        return $this->CPF;

    }
    public function getDataAdmissao(){
        return $this->dataAdmissao;

    }

    public function recebeAumento(){
        return ($this->salario * 0.10)+$this->salario;
    }

    public function calculoGanhoAnual(){
        $salarioAumentado=$this->recebeAumento();
        return $salarioAumentado * 12;
    }
    public function mostra(){
        echo $this->getNome()." trabalha no departamento ".$this->getDepartamento().", desde ".$this->getDataAdmissao().", possui salario de ".$this->calculoGanhoAnual();
    }
    public function __toString(){
        echo $this->getNome()." trabalha no departamento ".$this->getDepartamento().", desde ".$this->getDataAdmissao().", possui salario de ".$this->calculoGanhoAnual();
    }
}