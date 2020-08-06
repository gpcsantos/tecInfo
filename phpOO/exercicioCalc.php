<?php

class Calculadora{

    private float $t = 0;

    public function add($n){
        $this->t += $n;
        
    }
    public function sub($n){
        $this->t -= $n;
    }
    public function multiply($n){
        $this->t *= $n;
    }
    public function divide($n){
        $this->t /= $n;
    }
    public function clear(){
        $this->t = 0;
    }
    public function total(){
        return $this->t;
    }
}


$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: ".$calc->total();
$calc->clear();
echo "<br/>";
echo "TOTALzerado: ".$calc->total();