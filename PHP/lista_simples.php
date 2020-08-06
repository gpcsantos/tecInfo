<?php
    include_once("includes/conexao.php");


 //   echo "<pre>";
 //   print_r($sql);

 //   echo "<pre>";
 //   print_r($row);
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

        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Nascimento</th>
                    <th>Cidade</th>
                    <th>Ação</th>   
                </tr>
            </thead>
    <?php 
            $sql = mysqli_query($conecta,"SELECT a.pk_id, nome, email, DATE_FORMAT(dataNascimento,'%d/%m/%Y') AS dataNascimento, nomeCidade 
                FROM tb_amigos AS a INNER JOIN tb_cidade AS c ON c.pk_id=a.fk_cidade ORDER BY nome ASC");
            while($row = mysqli_fetch_object($sql)){
    ?>
            <tr>
                <td><?php echo $row->pk_id; ?></td>
                <td><?php echo $row->nome; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->dataNascimento; ?></td>
                <td><?php echo $row->nomeCidade; ?></td>
                <td>
                    <a href="#" class="btn btn-outline-secondary">[alterar]</a>
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modalExcluir" data-id="<?php echo $row->pk_id; ?>">
                    [excluir]
                    </button>
                </td>
            </tr>
    <?php 
            }
    ?>
        </table>

    <!-- Modal -->
    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="remover_amigo.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir esse registro?
                    <input name="pk_id" id="pk_id" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <button type="submit" class="btn btn-danger">Sim</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo base64_decode($_GET["msg"]); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

</div>

    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

    <script>
    $(function () {
        $('#modalExcluir').on('show.bs.modal', function (e) {
            var id_registro = $(e.relatedTarget).data('id');
            $('#pk_id').val(id_registro);
        });

        <?php if(!empty($_GET["msg"])) { ?>
        $('#modalMensagem').modal('show');
        <?php } ?>
    });
    </script>

</body>
</html>