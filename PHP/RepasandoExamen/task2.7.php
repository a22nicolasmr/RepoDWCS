<?php

declare(strict_types=1);
$bebidas = [
    $cocacola = ["text" => "Coca Cola", "precio" => 2.1],
    $pepsi = ["text" => "Pepsi", "precio" =>  2],
    $fantanaranja = ["text" => "Fanta", "precio" =>  2.5],
    $trinamanzana = ["text" => "Trina", "precio" => 2.3],
];
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function generarSelect(array $array): void
{
    echo '<select name="bebidasSelect">';
    foreach ($array as $key => $value) {
        echo "<option value=$key> $value[text] ( $value[precio] ) </option>";
    }
    echo "</select>";
}

$inputErorr = $valorInput = $valorSelect = "";
try {
    if (isset($_POST["butonEnviar"])) {
        if (empty($_POST["textInput"])) {
            $inputErorr = "rellena el input";
        } else {
            $valorInput = test_input($_POST["textInput"]);
            $valorSelect = $_POST["bebidasSelect"];

            $precioProducto = $bebidas[$valorSelect]["precio"] * $valorInput;
            $textoProducto = $bebidas[$valorSelect]['text'];
            echo "You have asked for $valorInput botles of  $textoProducto; total price = $precioProducto";
        }
    }
} catch (\Throwable $th) {
    echo "<span class='error'>Mete un valor numerico cabezon </span>";
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>


    <form method="post" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>">
        <?php
        generarSelect($bebidas);
        ?>
        <label for="textInput"></label><br>
        <input type="text" name="textInput"><br>
        <span class="error"><?php echo $inputErorr; ?></span><br>

        <input type="submit" value="Enviar" name="butonEnviar">

    </form>

</body>

</html>