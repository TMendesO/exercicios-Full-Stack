<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            function retornarDiaria($salario,$dias){
                 
                return number_format($salario/$dias.2);
            }
          $diaria = retornarDiaria(5000,15);
          echo $diaria;
        
        ?>
    </body>
</html>