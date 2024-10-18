<?php declare(strict_types=1); //indicamos que los tipos de las variables se cumplan 
echo "<h1>Ejercicio 2.3</h1>";

function calcularFactorial(int $numero)
{
    if ($numero <= 0) {
        throw new Exception("Numero menor que 0");
    } else {
        $factorial = 1;
        for ($i = $numero; $i > 1; $i--) {
            $factorial *= $i;
        }
        return  $factorial;
    }
}

?>
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
        define("NUM", 5);
        try {            
            echo "<h3>The result is ".calcularFactorial(NUM)."</h3>";
        } catch (\Throwable $th) {
            echo "". $th->getMessage() ."";
        }
        
        ?>

    </div>
</body>

</html>