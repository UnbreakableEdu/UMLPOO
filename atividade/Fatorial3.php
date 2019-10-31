<?php

class Fatorial{
    private $n;
    public function __construct($num)
    {
        $this->n = $num;
    }

    public function resultado()
    {
        $fato = 1;
        for ($i=1;$i<=$this->n;$i++){
            $fato=$fato * $i;
        }
        return $fato;
    }
}

$fatorial = new Fatorial(5);
echo $fatorial->resultado();
?>