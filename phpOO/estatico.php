<?php
// Metodo estático

class Matematica{


    public static function somar($x, $y){
        return $x + $y;

    }
}

// uso convencional de um classe
// $m= new Matematica();
//echo $m->somar(10,20);

//uso de uma classe estatica, posso usar um metodo ou poropriedade sem ter que instanciar a classe (criar um objeto)
echo Matematica::somar(300,20);


