<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "festa";

    $conecta = mysqli_connect($host, $user, $pass);

    if($conecta){
        mysqli_select_db($conecta,$dbname);
    }else{
        echo "ERRO: Falha ao conectar o  banco de dados!";
    }
?>