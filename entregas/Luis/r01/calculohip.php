<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculo Hipotenusa</title>
</head>
<body>
  <?php
    
    /*Fiz um pouco diferente pra não ficar igual a aula*/
    
$cat1=pow(8,2);
$cat2=pow(4,2);

$hip=($cat1 + $cat2);
$result=sqrt($hip);
echo "<p> a² = ". $cat1. "</p>".
    "<p> b² = ". $cat2. "</p>". 
    "<p> h² = ". $hip. "</p>". 
    "<p> Hipotenuza = ". $result. "</p>";
    
    ?>

    
</body>
</html>
