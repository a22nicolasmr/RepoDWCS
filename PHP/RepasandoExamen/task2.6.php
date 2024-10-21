<?php

declare(strict_types=1);

function generarSelect(array $array): void
{
    echo "<select name=bebidas id=bebidas>";
    foreach ($array as $key => $value) {
        echo "<option value=$key> $value[text] ( $value[precio] ) </option>";
    }
    echo "</select>";
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

    $bebidas = [
        $cocacola = ["text" => "Coca Cola", "precio" => 2.1],
        $pepsi = ["text" => "Pepsi", "precio" =>  2],
        $fantanaranja = ["text" => "Fanta", "precio" =>  2.5],
        $trinamanzana = ["text" => "Trina", "precio" => 2.3],
    ];

    generarSelect($bebidas);
    ?>

</body>

</html>