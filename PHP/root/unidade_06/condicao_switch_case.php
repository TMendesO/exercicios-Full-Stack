<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia = "Quinta " ;
            switch($dia){
                case "segunda":
                    echo "Hoje é Segunda". "</br";
                    break;
                    
                case "terça":
                    echo "HOje é terçe" . "</br>";
                    break;
                    
                case "quarta":
                    echo "Hoje é Quarta" . "</br>";
                    break;
                                                   
                case "sexta":
                    echo "Hoje é Sexta" . "</br>";
                    break;
                    
                default:
                    echo "Ta chegando a sexta!!";
                    
                    
            }
        ?>
    </body>
</html>