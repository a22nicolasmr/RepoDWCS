<?php
function createSelect(array $datos)
{
    echo '<form><br>';
    echo '<select name=opcion><br>';
    foreach ($datos as $producto => $value) {
        echo '<option value='.$producto.'>'.$value['texto'].'('.$value['precio'].'€)</option>';
    }
    echo '</select>';
    echo '</form>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2_6</title>
</head>
<body>
    <h1>Task 2.6</h1>
    <?php
       $productos = [
           'cocacola' => ['texto' => 'Cocacola', 'precio' => '2.1'],
           'pepsicola' => ['texto' => 'Pepsi Cola', 'precio' => '2'],
           'fantaNaranja' => ['texto' => 'Fanta Naranja', 'precio' => '2.5'],
           'trinaManzana' => ['texto' => 'Trina Manzana', 'precio' => '2.3'],
       ];
createSelect($productos);
?>    
</body>
</html>