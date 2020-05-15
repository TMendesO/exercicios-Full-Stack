<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
         require("pagina1.php");//se der erro para a execução do php
         echo "<br>";
         include_once("pagina1.php");//inclui uma unica vez sem repetir
         echo "<br>";
         include("pagina2.php");
        ?>
    </body>
</html>