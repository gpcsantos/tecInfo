<html>
<meta charset="utf-8">

<head>
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form method="post">
        Valor 1: <input type="text" name="txt1" placeholder="Digite um número"><br>
        <br>Operação: <select name="operacao">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select><br>
        <br>Valor 2: <input type="text" name="txt2" placeholder="Digite um número"><br>
        <br><input type="submit" value="Calcular">
    </form>
    <?php
        if ($_POST){
        $v1=$_POST['txt1'];
        $op=$_POST['operacao'];
        $v2=$_POST['txt2'];
        

            if ($op == "+") {
            $total = $v1 + $v2;
            echo "O resultado é: ". $total;
        }
            elseif ($op == "-")  {
            $total = $v1 - $v2;
            echo "O resultado é: ". $total;
        }
            elseif ($op == "*")  {
            $total = $v1 * $v2;
            echo "O resultado é: ". $total;
        }
            elseif ($op == "/")  {
            $total = $v1 / $v2;
            echo "O resultado é: ". $total;
        }
        }
            
        ?>

</body>

</html>
