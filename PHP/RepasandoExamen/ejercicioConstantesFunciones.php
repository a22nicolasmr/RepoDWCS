<?php

declare(strict_types=1);

function funcionIMC($peso = 85, $altura = 1.80): int
{
    return (int)($peso / $altura * $altura);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        define("peso", 90);
        define("altura", 1.80);

        echo (funcionIMC(peso, altura));
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    ?>

</body>

</html>