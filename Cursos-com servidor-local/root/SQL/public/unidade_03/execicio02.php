<?php
  require_once("../../conexao/conexao.php");
?>
 //passo 3- abrir consulta com banco de dados
$consulta_categorias ="SELECT * FROM categorias";   $consulta_categorias .=" WHERE categoriaID > 2";
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
        <?php
         while($registro = mysqli_fetch_row($categorias)){
             print_r($registro);
             echo "<br>";
         }
        
        ?>
    </body>
</html>
<?php
mysqli_close($conecta);

?>