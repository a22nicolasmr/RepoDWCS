//docker compose up
<html>
    <head>
        <title>DWCS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
                echo "<h1>Calcular numero factorial</h1>";
                $numero = 5;
                $factorial=1;
                for ($i=$numero; $i >1; $i--) { 
                    $factorial *= $i;
                }
                echo "El factorial de $numero es :" .$factorial             
            ?>
        </div>
    </body>
</html>
