<?php

    class MinhaCalculadora {
        private $val1,$val2;

        public function __construct($num1,$num2){
            $this->val1 = $num1;
            $this->val2 = $num2;
        }

        public function somar(){
            return $this->val1 + $this->val2;
        }
        public function subtrair(){
            return $this->val1 - $this->val2;
        }
        public function multiplicar(){
            return $this->val1 * $this->val2;
        }
        public function dividir(){
            return $this->val1 / $this->val2;
        }
    }

    $number = new MinhaCalculadora(12,6);
    echo $number->somar()."<br>";
    echo $number->subtrair()."<br>";
    echo $number->multiplicar()."<br>";
    echo $number->dividir()."<br>";