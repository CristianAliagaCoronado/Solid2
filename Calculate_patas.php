<?php

class CalculatePatasRefactor {

    private $sum;
    private $animals;

    public function __construct($animals = []) 
    {
        $this->animals = $animals;
        $this->sum = 0;
    }

    public function sum() 
    {
        $this->sum = array_sum($this->animals);
    }

    public function getSum() 
    {
        return $this->sum;
    }
}

class OutputPatas {

    private $patas;

    public function __construct($patas = 0)
    {
        $this->patas = $patas;
    }

    public function toText() 
    {
        return "Calculo ejecutado \n\n Los animales suman {$this->patas} patas.";
    }

    public function toJson()
    {
        return json_encode(['patas' => $this->patas]);
    }
}