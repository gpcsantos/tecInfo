<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "festa";

$conecta = mysqli_connect($host,$user,$pass);

if($conecta) {
    mysqli_select_db($conecta,$dbname);
} else {
    echo "ERRO: Falha ao conectar na base de dados!";
}

$sql = mysqli_query($conecta,"SELECT * FROM tb_amigos");
while($row = mysqli_fetch_object($sql)) {
    echo "<p> $row->codigo - $row->nome - $row->data_nascimento </p>";
}
?>