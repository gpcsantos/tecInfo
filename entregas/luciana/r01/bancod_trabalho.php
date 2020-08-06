<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dinks";

$conecta = mysqli_connect($host,$user,$pass);

if($conecta) {
    mysqli_select_db($conecta,$dbname);
} else {
    echo "ERRO: Falha ao conectar na base de dados!";
}

$sql = mysqli_query($conecta,"SELECT * FROM drinks_faceis");
while($row = mysqli_fetch_object($sql)) {
    echo "<p> $row->pk_id $row->nomedoDrink - $row->ingredientePrincipal </p>";
}

?>
    
</body>
</html>