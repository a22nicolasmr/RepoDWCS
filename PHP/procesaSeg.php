<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesaseg</title>
</head>

<body>
    <?php
    $name = $email = '';

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $name = test_input($_POST['vNome']);
        $email = test_input($_POST['vEmail']);
    }

    function test_input($data)
    {
        $data = trim($data);
        // espazos
        $data = stripslashes($data);
        // barra invertida
        $data = htmlspecialchars($data);
        // convierte caracteres especiales en html

        return $data;
    }

    echo 'your email is ' . $email . '<br>';
    echo 'your name is ' . $name;
    ?>
</body>

</html>