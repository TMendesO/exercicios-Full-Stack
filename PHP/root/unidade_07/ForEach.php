<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = array ("maça","abacate","laranja","uva","banana");
           foreach($salada as $fruta){
               echo $fruta . "<br>";
           }
        ?>
    </body>
</html>