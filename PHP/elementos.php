<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/* Calculo da média */
$bim1 = 8;
$bim2 = 7.5;
$bim3 = 6.5;
$bim4 = 10;

$media = ($bim1 + $bim2 + $bim3 + $bim4)/4;
echo "Média: ". $media;


/* operadores matemáticos */
$cat1=3;
$cat2=4;

$hip = sqrt($cat1**2 + pow($cat2,2) );
echo "<p> Hipotenusa = ". $hip;


/* operadores condicionais */
$idade = 42;
if ($idade >= 18) {
    echo "<p>Maior Idade</p>";
} else {
    echo "<p>Menor Idade</p>";
}

$result = ($idade >= 18) ? "Maior Idade" : "Menor Idade" ;
echo "<p>$result</p>";

/*
OPERADORES ARITMÉTICOS
$a + $b	Adição	Soma de $a e $b.
$a - $b	Subtração	Diferença entre $a e $b.
$a * $b	Multiplicação	Produto de $a e $b.
$a / $b	Divisão	Quociente de $a e $b.
$a % $b	Módulo	Resto de $a dividido por $b.
$a ** $b	Exponencial	Resultado de $a elevado a $b. Introduzido no PHP 5.6.

OPERADORES de COMPARAÇÃO (Lógicos)
$a == $b	Igual	Verdadeiro (TRUE) se $a é igual a $b.
$a === $b	Idêntico	Verdadeiro (TRUE) se $a é igual a $b, e eles são do mesmo tipo.
$a != $b	Diferente	Verdadeiro se $a não é igual a $b.
$a <> $b	Diferente	Verdadeiro se $a não é igual a $b.
$a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).
$a < $b	Menor que	Verdadeiro se $a é estritamente menor que $b.
$a > $b	Maior que	Verdadeiro se $a é estritamente maior que $b.
$a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.
$a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.
$a <=> $b	Spaceship (nave espacial)	Um integer menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b. Disponível a partir do PHP 7.
*/


?>

    
</body>
</html>