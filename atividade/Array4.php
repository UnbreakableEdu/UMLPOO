<?php

// Funcao pode obter apenas uma array como argumento
class sortArray{

    private $arr_sort;
    public function __construct(array $asort){
        
        $this->arr_sort = $asort;
    }
    
    public function sortArray(){
        $sorted = $this->arr_sort;
        sort($sorted);
        return $sorted;
    }

}
    
    $objetoArray = new sortArray(array(11,-2,4,35,0,8,-9));
    $arr = $objetoArray->sortArray();
    foreach ($arr as $value){
        echo $value."<br>";
    }