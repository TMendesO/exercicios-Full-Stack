<?php require_once("../../conexao/conexao.php"); ?>
<?php
 if( isset($_GET["codigo"])){
  $produto_ID = $_GET["codigo"];
  } else{
    
 }


//consulta ao banco de dados

$consulta ="SELECT * FROM `produtos` WHERE `produtoID`";
$detalhe = mysqli_query($conecta, $consulta) ;

//testar erro

if(!$detalhe){
    die ("Falha no Banco de Ddados");
    
}else{
   
    $dados_detalhe = mysqli_fetch_assoc($detalhe);
    $produtoID      = $dados_detalhe ["produtoID"];
    $nomeproduto    = $dados_detalhe ["nomeproduto"];
    $descricao      = $dados_detalhe ["descricao"];
    $codigobarra    = $dados_detalhe ["codigobarra"];
    $tempoentrega   = $dados_detalhe ["tempoentrega"];
    $precorevenda     = $dados_detalhe ["precorevenda"];
    $precounitario  = $dados_detalhe ["precounitario"];
    $estoque        = $dados_detalhe ["estoque"];
    $imagemgrande   = $dados_detalhe ["imagemgrande"];
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="detalhe_produto">
                <ul>
                    <li><img src="<?php echo $imagemgrande ?>"></li>
                    <li><?php echo $nomeproduto ?></li>
                    <li><?php echo  $descricao ?></li>
                    <li><?php echo $codigobarra ?></li>
                    <li><?php echo $tempoentrega ?></li>
                    <li><?php echo $precorevenda ?></li>
                    <li><?php echo $precounitario ?></li>
                    <li><?php echo $estoque ?></li>
                    
                </ul>
            
            </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>