<?php
  require_once("../../conexao/conexao.php");
?>
<?php
 //passo 3- abrir consulta com banco de dados
$consulta_categorias ="SELECT nomeproduto FROM produtos";   $consulta_categorias .=" WHERE categoriaID > 2";
$categorias = mysqli_query($conecta, $consulta_categorias);
if(!$categorias){
    die("falha na consulta.");
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <ul>  
        <?php
            //liberar dados da memoria
         while( $registro = mysqli_fetch_assoc($categorias)){
             ?>
              <li>
                <?php echo $registro["nomeproduto"] ?>  
              </li>          
             <?php
             
         }
        
        ?>
        </ul>
        
        <?php
        //fechar conecxão
          mysqli_free_result($categorias);
        ?>
    </body>
</html>
<?php
mysqli_close($conecta);

?>