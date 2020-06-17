<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
    <link href="C:/Users/thiag/Documents/Informatica/Udemy/exercicios-Full-Stack/PHP+SQL+AJAX/root/public/unidade_11/_css/estilo.css" rel="stylesheet">
</head>

<body>
    <main>
        <div id="janela_formulario">
            <form id="pesquisarProdutos">
                <label for="categorias">Categorias</label>
                <select id="categorias">
                </select>

                <label for="produtos">Produtos</label>
                <select id="Pordutos">
                </select>


            </form>
        </div>
    </main>


    <script src="_js/jquery.js"></script>
    <script>
        function retornarCategorias(data) {
            var categorias = "";
            $.each(data, function(chave, valor) {
                categorias += '<option value="' + valor.categoriaID + '">' + valor.nomecategoria + '</option>';
            });
            $('#categorias').html(categorias);
        }

        $('#categorias').change(function(e) {
            var categoriaID = $(this).val();

            $.ajax({
                type: "GET",
                data: "categoriaID=" + categoriaID,
                url: "http://localhost:8080/public/unidade_11/retornar_produtos.php",
                async: false
            }).done(function(data) {
                var produtos = "";
                $.each($.parseJSON(data), function(chave, valor) {
                    produtos += '<option value="' + valor.produtoID + '">' + valor.nomeproduto + '</option>';
                });
                produtos += "</ul>";
                $('#Pordutos').html(produtos);
            })
        });

    </script>
    <script src="http://localhost:8080/public/unidade_11/retornar_categorias.php?callback=retornarCategorias"></script>
</body>

</html>
