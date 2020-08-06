<?php
    include_once("includes/conexao.php");

    if($_GET){
        $op = $_GET['op'];
        $msg = $_GET['msg'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Lista Simples</title>
</head>
<body>
<div class="container">
<?php if(isset($op)){ ?> 
    <div class="alert alert-<?php echo $op;?> alert-dismissible fade show" role="alert">
        <?php echo $msg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>
    <a class="btn btn-primary" href="lista_incluirbkp.php">INSERIR NOVO AMIGO</a>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Nascimento</th>
                <th>fk_cidade</th>
                <th>Ação</th>   
            </tr>
        </thead>
<?php 
        $sql = mysqli_query($conecta,"SELECT a.pk_id, nome, email, dataNascimento, nomeCidade 
            FROM tb_amigos AS a INNER JOIN tb_cidade AS c ON c.pk_id=a.fk_cidade ORDER BY nome ASC");
        if($sql->num_rows > 0){
            while($row = mysqli_fetch_object($sql)){
?>
            <tr>
                <td><?php echo $row->pk_id; ?></td>
                <td><?php echo $row->nome; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->dataNascimento; ?></td>
                <td><?php echo $row->nomeCidade; ?></td>
                <td><a href="lista_alterarbkp.php?id=<?php echo $row->pk_id; ?>" class="btn btn-outline-secondary">[alterar]</a>
                    <a href="lista_excluirbkp.php?id=<?php echo $row->pk_id; ?>" class="btn btn-outline-secondary" onclick="return confirm('Deseja realmene excluir o amigo?');">[excluir]</a></td>
            </tr>
<?php 
            }
        }else{
?>
            <tr>
                <td colspan="6">Não foram encontrados registros!</td>
            </tr>
<?php 
        }
?>
    </table>
</div>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</body>
</html>