<?php
$con = new mysqli("localhost", "root", "", "festa");
if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql="SELECT a.pk_id as id, nome,email,dataNascimento,nomeCidade,fk_cidade FROM 
                    tb_amigos AS a INNER JOIN tb_cidade AS c ON a.fk_cidade=c.pk_id ";
                $result = $con->query($sql);
echo "<pre>";
print_r($result);
exit;
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;

//Pergunta para verificar e habilitar os formulários de alteração e inclusão
if(isset($_REQUEST["id"]) && isset($_REQUEST["op"])){
    $id = $_REQUEST["id"];
    $op = $_REQUEST["op"];
    if($id<>"" && $op=="d"){
        $sql = "DELETE FROM tb_amigos WHERE pk_id=$id";
        if ($con->query($sql) === TRUE) {
            $msg="O cadastro do Amigo foi excluído com sucesso!";
            $alert="alert-success";
        } else {
            $msg = "Erro: " . $sql . "<br>" . $con->error;
            $alert="alert-danger";
        }
    }
//   echo "<p>id: $id</p>";
//   echo "<p>op: $op</p>";
}else{
    $id = "";
    $op = "";
}
//pergunta para fazer as AÇÕES de INLCUIR ou ALTERAR no Banco de Dados
if(isset($_REQUEST["btn_incluir"]) || isset($_REQUEST["btn_alterar"])){
    $nome = $_REQUEST["txt_nome"];
    $email = $_REQUEST["txt_mail"];
    $nascimento = $_REQUEST["txt_nascimento"];
    $cidade = $_REQUEST["cbo_cidade"];
    if(isset($_REQUEST["btn_incluir"])){
        $btn = $_REQUEST["btn_incluir"];
        $sql = "INSERT INTO tb_amigos(nome, dataNascimento, email, fk_cidade)
            VALUES('$nome','$nascimento','$email',$cidade)";
    }
    if(isset($_REQUEST["btn_alterar"])){
        $pk_id = $_REQUEST["btn_alterar"];
        $sql = "UPDATE tb_amigos SET nome='$nome', dataNascimento='$nascimento', email='$email', fk_cidade=$cidade 
            WHERE pk_id=$pk_id";
    }
    if ($con->query($sql) === TRUE) {
        if(isset($_REQUEST["btn_incluir"])){
            $msg="Novo amigo incluido com sucesso!";
        }else{
            $msg="Cadastro do amigo alterado com sucesso!";
        }
        $alert="alert-success";
      } else {
        $msg = "Erro: " . $sql . "<br>" . $con->error;
        $alert="alert-danger";
      }
 //  echo "<p>btn: $btn</p>";
 //echo "SQL: $sql</br>";
 //echo "nome: $nome</br>";
 //echo "email: $email</br>";
 //echo "nascimento: $nascimento</br>";
// echo "cidade: $cidade</br>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Banco de dados</title>
</head>
<body>
    <div class="container"> 
<?php
    if(isset($msg)){
    echo '<div class="alert '. $alert .' alert-dismissible fade show" role="alert">';
    echo $msg;
    echo '</div>';
    }
?>
        <?php
            if ($id<>"" && $op=="u") {
                $sql="SELECT a.pk_id as id, nome,email,dataNascimento,nomeCidade,fk_cidade FROM 
                    tb_amigos AS a INNER JOIN tb_cidade AS c ON a.fk_cidade=c.pk_id AND a.pk_id=$id";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
                $cidade = $row["fk_cidade"];
        ?>
                <h2>Alterar cadastro do amigo</h2>
                    <form method="POST" id="formUpdate" action="banco.php">
                        <div class="form-group">
                            <label for="txt_nome">Nome</label>
                            <input type="text" class="form-control" id="txt_nome" name="txt_nome" value="<?php echo $row["nome"]; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="txt_mail">E-mail</label>
                            <input type="email" class="form-control" id="txt_mail" name="txt_mail" value="<?php echo $row["email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="txt_nascimento">Data Nascimento</label>
                            <input type="date" class="form-control" id="txt_nascimento" name="txt_nascimento" value="<?php echo $row["dataNascimento"]; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="cbo_cidade">Cidade</label>
                            <select class="form-control" id="cbo_cidade" name="cbo_cidade">
                                <option value="0">-</option>
        <?php
                                    $sql="SELECT * FROM tb_cidade ORDER BY nomeCidade";
                                    $result = $con->query($sql);
                                    while ($row1 = $result->fetch_assoc()) {
                                        $b = ($row1["pk_id"] == $cidade) ? "selected" : "" ;
                                        echo '<option value="'. $row1["pk_id"] .'" '. $b .' >' . $row1["nomeCidade"] . '</option>';
                                    }
        ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_alterar" value="<?php echo $id ; ?>">ALTERAR</button>
                    </form>
        <?php        
            }else{
                if($id=="" && $op=="i"){
        ?>
                    <h2>Novo Amigo</h2>
                        <form method="POST" id="formInsert" action="banco.php">
                            <div class="form-group">
                                <label for="txt_nome">Nome</label>
                                <input type="text" class="form-control" id="txt_nome" name="txt_nome" placeholder="Nome completo" >
                            </div>
                            <div class="form-group">
                                <label for="txt_mail">E-mail</label>
                                <input type="email" class="form-control" id="txt_mail" name="txt_mail" placeholder="E-mail" >
                            </div>
                            <div class="form-group">
                                <label for="txt_nascimento">Data Nascimento</label>
                                <input type="date" class="form-control" id="txt_nascimento" name="txt_nascimento" >
                            </div>
                            <div class="form-group">
                                <label for="cbo_cidade">Cidade</label>
                                <select class="form-control" id="cbo_cidade" name="cbo_cidade">
                                    <option value="0">-</option>
        <?php
                                        $sql="SELECT * FROM tb_cidade ORDER BY nomeCidade";
                                        $result = $con->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='". $row["pk_id"] ."'>" . $row["nomeCidade"] . "</option>";
                                        }
        ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="btn_incluir" value="btn_incluir">SALVAR NOVO</button>
                        </form>
        <?php
                }
            }
        ?>
        <a class="btn btn-outline-secondary" href="banco.php?id=&op=i">Inserir novo Amigo</a>
        <table class="table table table-striped">
            <thead class="thead-light">
                <tr> 
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Nascimento</th> 
                    <th>Cidade</th> 
                    <th>Opções</th>   
                </tr>
            </thead>
        <?php
            $sql="SELECT a.pk_id as id, nome,email,dataNascimento,nomeCidade FROM 
                tb_amigos AS a INNER JOIN tb_cidade AS c ON a.fk_cidade=c.pk_id ORDER BY nome";
            if ($result = $con->query($sql)) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr> 
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nome"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["dataNascimento"]; ?></td>   
                        <td><?php echo $row["nomeCidade"]; ?></td>
                        <td><a class="btn btn-outline-secondary" href="banco.php?id=<?php echo $row["id"]; ?>&op=u">Editar</a>
                        <a class="btn btn-outline-secondary" href="banco.php?id=<?php echo $row["id"]; ?>&op=d">Excluir</a></td>
                    </tr>
        <?php
                }
                $result->close();
            }
        ?>
        </table>
    </div>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
mysqli_close($con);

?>