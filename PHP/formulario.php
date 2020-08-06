<?php

if(isset($_POST["submit"])){
    $email = $_REQUEST["txt_email"];
    $pass = $_POST["txt_senha"];
    $bt = $_POST["submit"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
    echo "abriu informações do formulário </br>";
    echo "<p>Email recupeado do formulário: " . $email . "</p>";
    echo "<p>Senha recupeada do formulário: " . $pass . "</p>";
}else{
?>
<h1>FORMULÁRIO HTML</h1>
    <form method="GET" action="form_received.php">
        <p>início do formulário?</p>
        <label for="txt_email">E-mail </label></br>
        <input type="email" id="txt_email" name="txt_email" placeholder="E-mail" required > 
        </br></br>
        <label for="txt_senha">Senha </label></br>
        <input type="password" id="txt_senha" name="txt_senha" placeholder="Senha">
        </br></br>
        <input type="submit" id="submit" name="submit" value="ENVIAR">
    </form>
<?php
}
?>
</body>
</html>