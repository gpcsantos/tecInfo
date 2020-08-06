<?php

echo "Meu primeiro PHP";
$num1 = 10;
$num2 = 20;
$resultado = $num1 + $num2;
//echo $resultado;


?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"
        <title>Meu primeiro PHP</title>

    </head>
    <body>
        <h1>Corpo do site</h1>

        <?php
            echo "<hr>";
            echo "<p> Início do texto no código <strong> PHP </strong>, dentro do HTML.</p>";
            echo "<hr>";
            echo '<p>O valor da soma de : ' . $num1 . '+' . $num2 . '= ' . ($num1 + $num2) .'</p>';
            echo "<p>O valor da soma de : $num1 + $num2 = ".($num1+$num2)."</p>"; 
        ?>

    </body>
</html>