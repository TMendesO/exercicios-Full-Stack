<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <style>
            #curso {
                color:red;
            }
        </style>
    </head>

    <body>
        <div id="curso"></div>
        <div id="curso"></div>
        
        
        <script src="jquery.js"></script>
        <script>
          $('div#curso').load('dados.txt');
        
        </script>
    </body>
</html>