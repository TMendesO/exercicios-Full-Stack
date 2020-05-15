<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
         //determinar timezone
          date_default_timezone_set('America/Sao_Paulo');
          setlocale(LC_TIME, "pt_BR");
           
            
         //criar elementos
          $ano = strftime('%Y');
          $mes =  strftime('%B');
          $dia =  strftime('%d'); 
          $hora = strftime('%H');
          $minuto = strftime('%M');
        
         $dia_da_semana = strftime('%A');
        
        echo  $dia_da_semana . ", ". $dia . " de ". $mes ." de ". $ano . "-". $hora.":". $minuto;
        
        ?>
    </body>
</html>