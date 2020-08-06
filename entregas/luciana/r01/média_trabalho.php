<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$bim1 = 7.5;
$bim2 = 8;
$bim3 = 7;
$bim4 = 9;
$media = ($bim1 + $bim2 + $bim3 + $bim4)/4;

echo "<p> Primeiro Bimestre nota: " . $bim1 . "</p>";
echo "<p> Segundo Bimestre nota: " . $bim2 . "</p>";
echo "<p> Terceiro Bimestre nota: " . $bim3 . "</p>";
echo "<p> Quarto Bimestre nota: " . $bim4 . "</p>";

echo "<p> A média é: " . $media . "</p>";


?>
    
</body>
</html>