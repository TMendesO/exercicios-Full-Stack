<?php
   //configurações gerais
    header('Access-Control- Allow-Origin:*');
    
  //abrir conexão
    $conecta =mysqli_connect("localhost","root","usbw","andes");

    $selecao ="SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);
      
     
    $retorno =array();
    while($linha= mysqli_fetch_object($produtos)){
        
       $retorno[] = $linha; 
        
    }

    echo json_encode($retorno);  
    
   // fechar conecta

    mysqli_close($conecta);


?>
