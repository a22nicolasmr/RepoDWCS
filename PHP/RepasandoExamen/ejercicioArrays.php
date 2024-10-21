<?php

declare(strict_types=1);

function tripleCheck(array $array): bool
{
    $valorReturn = false;
    for ($i = 0; $i < count($array); $i++) {
        if ($i == count($array) - 1) {
            break;
        } else {
            if ($array[$i] === $array[$i + 1] && ($array[$i] === $array[$i + 2])) {
                $valorReturn = true;
            }
        }
    }
    return $valorReturn;
}

function countries(array $array): void
{
    foreach ($array as $key => $value) {
        echo "<p>The capital of $key is $value </p>";
    }
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
    $numeros1 = [1, 1, 2, 2, 2, 3];
    echo (tripleCheck($numeros1) ? "true" : "false");
    $ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

    countries($ceu);

    ?>

</body>

</html>