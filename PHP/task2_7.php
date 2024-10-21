<?php

function createSelect(array $datos)
{
    echo '<select name="opcion"><br>';
    foreach ($datos as $producto => $value) {
        echo '<option value="' . $producto . '">' . $value['texto'] . ' (' . $value['precio'] . '€)</option>';
    }
    echo '</select>';
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2_7</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <h1>Task 2.7</h1>
    <?php
    // Array de productos
    $productos = [
        'cocacola' => ['texto' => 'Cocacola', 'precio' => '2.1'],
        'pepsicola' => ['texto' => 'Pepsi Cola', 'precio' => '2'],
        'fantaNaranja' => ['texto' => 'Fanta Naranja', 'precio' => '2.5'],
        'trinaManzana' => ['texto' => 'Trina Manzana', 'precio' => '2.3'],
    ];

    $precioProducto = $valorSelect = $cantidadeError = $cantidade = "";

    //Comprobar si la pagina ya se ha cargado una vez
    if (isset($_GET["enviar"])) {
        if (empty($_GET["vCantidade"])) { //si el valor de la cantidad del valor esta vacio
            $cantidadeError = "Cantidade requerida";
        } else { //si no esta vacio ambos valores se igualan al campo correspondientes
            if (is_numeric($_GET["vCantidade"])) { //miramos si vCantidade es numerico sino error
                $cantidade = $_GET["vCantidade"];
                $valorSelect = $_GET["opcion"];

                // Comprobar que la opción seleccionada existe en el array de productos
                if (isset($productos[$valorSelect])) {
                    $precioProducto = $productos[$valorSelect]["precio"];
                } else {
                    echo "Producto no válido seleccionado.";
                }
            } else {
                $cantidadeError = "ONLY NUMBERS ACCEPTED";
            }
        }

        // Si no hay errores de cantidad, mostrar resultados
        if ($cantidadeError == "") {
            echo "Número de botellas de " . $valorSelect . " = " . $cantidade . " que son: " . ($precioProducto * $cantidade) . "€";
        }
    }

    ?>

    <form method="get" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>">
        <?php createSelect($productos); ?>
        <br>
        Cantidad: <input type="text" name="vCantidade">
        <span class="error"> <?php echo $cantidadeError; ?> </span><br>
        <input type="submit" name="enviar" value="Send data">
    </form>
</body>

</html>