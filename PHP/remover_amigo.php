<?php

if(!empty($_POST["pk_id"])) {
    include('includes/conexao.php');
    $rs = mysqli_query($conecta,"DELETE FROM tb_amigos WHERE pk_id = " . $_POST["pk_id"]);
    if($rs) {
        $msg = base64_encode("Registro removido com sucesso!");
    } else {
        $msg = base64_encode("Falha ao tentar remover o registro! Tente novamente mais tarde.");
    }
}

header('Location: lista_simples.php?msg='.$msg);
exit;

?>