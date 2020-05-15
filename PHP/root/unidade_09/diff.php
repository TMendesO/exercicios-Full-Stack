<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        date_default_timezone_set('America/Sao_Paulo');
          setlocale(LC_TIME, "pt_BR");
        
        $data1 = new DateTime('2019-06-10');
        $data2 = new DateTime('1990-04-14');
        $intervalo = $data1->diff($data2);
        
        ?>
        <pre>
        <?php print_r($intervalo->format('%R%a')); ?>    
        
        </pre>
    </body>
</html>