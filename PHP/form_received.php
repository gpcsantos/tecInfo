<?php

$email = $_REQUEST["txt_email"];
$pass = $_REQUEST["txt_senha"];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento Formulário</title>
</head>
<body>
    <?php

    echo "<p>Email recupeado do formulário: " . $email;
    echo "<p>Senha recupeada do formulário: " . $pass;

    ?>

    
</body>
</html>