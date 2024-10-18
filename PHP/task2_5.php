<?php declare(strict_types=1);
function tripleCheck(array $numeros): bool
{
    $valorFinal = false;
    $contador = 0;
    for ($i = 0; $i < count($numeros); ++$i) {
        if (($i + 1) >= count($numeros)) {
            if ($contador >= 3) {
                $valorFinal = true;
            } else {
                $valorFinal = false;
            }
            break;
        } else {
            if ($numeros[$i] == $numeros[$i + 1]) {
                $contador = $contador + 1;
            }
        }
    }

    return $valorFinal;
}

function countries(array $countries)
{
    foreach ($countries as $country => $capital) {
        echo '<br>The capital of '.$country.' is: '.$capital.'</br>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
</head>
<body>
    <?php
        $numeros1 = [1, 1, 1, 1, 1, 2, 2, 3];
$numeros2 = [1, 1, 2, 2, 3];
echo tripleCheck($numeros2) ? 'true' : 'false';
$ceu = ['Italy' => 'Rome', 'Luxembourg' => 'Luxembourg', 'Belgium' => 'Brussels', 'Denmark' => 'Copenhagen', 'Finland' => 'Helsinki', 'France' => 'Paris', 'Slovakia' => 'Bratislava', 'Slovenia' => 'Ljubljana', 'Germany' => 'Berlin', 'Greece' => 'Athens', 'Ireland' => 'Dublin', 'Netherlands' => 'Amsterdam', 'Portugal' => 'Lisbon', 'Spain' => 'Madrid', 'Sweden' => 'Stockholm', 'United Kingdom' => 'London', 'Cyprus' => 'Nicosia', 'Lithuania' => 'Vilnius', 'Czech Republic' => 'Prague', 'Estonia' => 'Tallin', 'Hungary' => 'Budapest', 'Latvia' => 'Riga', 'Malta' => 'Valetta', 'Austria' => 'Vienna', 'Poland' => 'Warsaw'];
echo countries($ceu);
// para que imprima true o false
// sino imprime 1 o nada

?>
</body>
</html>