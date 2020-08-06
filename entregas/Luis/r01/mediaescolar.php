<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média Escolar</title>
</head>
<body>
   <h1>Cálculo de média escolar</h1>
   <form method="post">
       <label>1° Bimestre </label><input type="text" name="bim1" placeholder="Digite a nota do 1°bim" required><br><br>
       <label>2° Bimestre </label><input type="text" name="bim2" placeholder="Digite a nota do 2°bim" required><br><br>
       <label>3° Bimestre </label><input type="text" name="bim3" placeholder="Digite a nota do 3°bim" required><br><br>
       <label>4° Bimestre </label><input type="text" name="bim4" placeholder="Digite a nota do 4°bim" required><br><br>
       <input type="submit" name="calcular" value="Calcular"><br><br>
    <?php       
    if ($_POST) {
    $bim1=$_POST['bim1'];
    $bim2=$_POST['bim2'];
    $bim3=$_POST['bim3'];
    $bim4=$_POST['bim4'];
        
    if (is_numeric($bim1) and is_numeric($bim2) and is_numeric($bim3) and is_numeric($bim4)) {
        
    $result=($bim1+$bim2+$bim3+$bim4)/4;

        if ($bim1 >= 0 and $bim1 <=10 and $bim2 >= 0 and $bim2 <=10 and $bim3 >= 0 and $bim3 <=10 and $bim4 >= 0 and $bim4 <=10){
    
        echo "<p> A média é = ". $result. "</p>";
            if ($result >= 6) 
                echo "Aluno aprovado";
        
            elseif ($result >= 4)
                echo "Aluno em conselho";
        
            else
                echo "Aluno reprovado";
        } else
            echo "Digite números validos";
    } else 
            echo "Digite apenas números";
    }
    ?>    
   </form>
</body>
</html>