<?php
    $salario = 800;
    $gasolina = 2.79;
    $nome = "Thiago";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
                echo "O $salario é um numero? " . is_numeric($salario) . "</br>";
                echo "O $gasolina é um numero? " . is_numeric($gasolina) . "</br>";
                echo "O $nome é um numero? " . is_numeric($nome). "</br></br>";
            // testar se é inteiro

              echo "O $salario é inteiro? " . is_int($salario) . "</br>";
                echo "O $gasolina é inteiro? " . is_int($gasolina) . "</br></br>";
            // testar se é float
            echo "O $salario é float? " . is_float($salario) . "</br>";
            echo "O $gasolina é float? " . is_float($gasolina) . "</br></br>";
            echo round($gasolina) . "</br>";
            echo floor($gasolina) ."</br>";
            echo ceil($gasolina);
        
        ?>
        
        
    </body>
</html>