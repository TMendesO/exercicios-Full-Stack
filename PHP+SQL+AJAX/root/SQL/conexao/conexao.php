<?php
//Passo1-abrir conexão
$conecta = mysqli_connect("localhost","root","usbw","agenda1",3307);



//Passo2 - testar conexão

if(mysqli_connect_errno()){
    die("Conexão falhou: ".mysqli_connect_errno());
    
}

?>