<?php declare(strict_types= 1);
    function potencia(int $base,int $potencia=2){//un argumento se iguala a dos para que tenga ese valor por defecto
        $resultado=1;
        for ($i=0; $i < $potencia; $i++) { 
            $resultado=$resultado*$base;
        }
        return $resultado;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
    <?php
        try {
            echo "<h3> El resultado de la ejecucion de la funcion es: ". potencia(3) ."</h3>" ;
        } catch (\Throwable $th) {
            echo "<p> ERROR ". $th->getMessage() ."</p>";
        }
    ?>
    
</body>
</html>