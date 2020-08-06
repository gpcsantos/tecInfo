<?php
    include_once("includes/conexao.php");

    if($_GET){
        $id = $_GET["id"];
        $sql = "DELETE FROM tb_amigos WHERE pk_ID = $id";
        if($conecta->query($sql) === TRUE){
            $op="success";
            $msg = "Cadastro do amigo excluido com sucesso";
        }else{
            $op = "danger";
            $msg = "Erro na exclusão do cadastro:</br>Erro: ".$conecta->error;
        }
        header('Location: lista_simplesbkp.php?op='.$op.'&msg='.$msg);
        
    }else{
        $op = "danger";
        $msg = "Cadastro do amigo não foi informado:";
        header('Location: lista_simplesbkp.php?op='.$op.'&msg='.$msg);
    }

?>
