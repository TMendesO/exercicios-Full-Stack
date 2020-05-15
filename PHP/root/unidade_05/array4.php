<?php
   
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
          <?php
            $salada = array("maçã","abacate", "laranja");
        
         echo "Existe o elemento Pera na salada? " .  array_search("laranja", $salada);
        
        ?>
    </body>
</html>