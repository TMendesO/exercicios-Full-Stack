<?php require_once("../../conexao/conexao.php"); ?>
<?php
//iniciar sessão
 session_start();
// criar variavel de sessão
$_SESSION["usuario"]= "Thiago";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>
            <?PHP
               echo $_SESSION["usuario"];
            ?>
            <p>
            <a href="pagina2.php">Pagina 2</a>
            </p>    
        </main>

        <footer>
            <div id="footer_central">
                <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>