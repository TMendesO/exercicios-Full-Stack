<?php
 $a= 10;
 $b= 10;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
           if($a > $b){
               echo "A é maior que B";
           }else if($a < $b){
               echo "B é maior que A";
           }else{
               echo " A é Igual a B";
           }
         ?>
    </body>
</html>