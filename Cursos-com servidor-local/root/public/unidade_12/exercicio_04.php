<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>

    <script src="_js/jquery.js"></script>
    <script>
        $.ajax({
            type: "GET",
            url: "https://api.hgbrasil.com/weather/?q=Sao+Paulo,br",
            async: false
        }).done(function(data) {
            console.log(data);
        }).fail(function() {
            console.log("Erro");
        });

    </script>
</body>

</html>
