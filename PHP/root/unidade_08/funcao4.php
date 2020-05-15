<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria($salario,$dias,$cotacao){
                $real = number_format($salario/$dias,2);
                $dolar = number_format(($salario/$dias)/$cotacao,2);
                 
                return array($real,$dolar);
            }
          $diaria_array = retornarDiaria(5000,15,3.80);
          echo "Diaria em reais: " .$diaria_array[0]."<br>";
          echo "Diaria em dolares: ". $diaria_array[1]."<br>";
        
        ?>
    </body>
</html>