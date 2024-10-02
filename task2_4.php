<?php declare(strict_types=1);
    function recibirPersona(?string $name,int $age,string $surname="Apelido"):void {
        //el parametro opcional tiene que ser el ultimo de la funcion
        echo "<b>".$name." ".$surname." is ".$age." years old </b>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task4</title>
</head>
<body>
    <?php
        recibirPersona("Nico",23,"Miguez");
    ?>
</body>
</html>