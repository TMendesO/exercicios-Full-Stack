<?php
  $salada = array("maçã", "abacate", "laranja");
   


?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        echo $salada[0]."</br>";
        echo $salada[1] ."</br>";
        echo $salada[2] . "</br></br>";
        $salada[4] = "Banana";
        $salada[3] = "Kiwi";
        echo count($salada) . "</br>";
         
        
        
        ?>
        <pre>
          <?php 
            print_r($salada);
          
          ?>
        </pre>
    </body>
</html>