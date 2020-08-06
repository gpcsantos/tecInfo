<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
            
    <input type="text" name="v1" placeholder="Valor 1" />
            
        <select name="operacao">
            <option value="soma">+</option>
            <option value="subtrai">-</option>
            <option value="multiplica">*</option>
            <option value="divide">/</option>
        </select>
            
    <input type="text" name="v2" placeholder="Valor 2" />
            
    <input type="submit" name="doCalc" value="Calcular" />
</form>

<?php
       
class Calculadora {
           
    public function Calcular() {
               
        if (isset($_POST['doCalc'])) {
                   
        if ($_POST['operacao'] == "soma") {
                        
        $resultado = $_POST['v1'] + $_POST['v2'];
                        
        return $resultado;
                        
        } elseif ($_POST['operacao'] == "subtrai") {
        $resultado = $_POST['v1'] - $_POST['v2'];
        return $resultado;
        } elseif ($_POST['operacao'] == 'multiplica') {
        $resultado = $_POST['v1'] * $_POST['v2'];
        return $resultado;
        } elseif ($_POST['operacao'] == 'divide') {
        $resultado = $_POST['v1'] / $_POST['v2'];
        return $resultado;
        }
        }
        }
        }
    $calcular = new Calculadora();
    echo $calcular->Calcular();
    ?>
</body>
</html>


