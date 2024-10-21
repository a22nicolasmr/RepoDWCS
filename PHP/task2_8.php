<?php
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
    <title>Task2_8</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $inputUsername = $inputPassword = $cityemployement = $errorUsername = $errorPassword = $errorCity = $opcionWebServer = $status = $singed = "";
    if (isset($_GET["enviar"])) {
        if (empty($_GET["vUsername"])) {
            $errorUsername = "Username obligatorio";
        } else {
            $inputUsername = test_input($_GET["vUsername"]);
        }

        if (empty($_GET["vPassword"])) {
            $errorPassword = "Password obligatorio";
        } else {
            $inputPassword = test_input($_GET["vPassword"]);
        }

        if (empty($_GET["vCity"])) {
            $errorCity = "City obligatorio";
        } else {
            $cityemployement = test_input($_GET["vCity"]);
        }

        $opcionWebServer = $_GET["opcionWebServer"];
        $status = $_GET["status"];
        $singed = $_GET["singed"];

        if ($errorUsername === "" && $errorCity === "" && $errorPassword === "") {
            // No hay errores, puedes proceder con el procesamiento de los datos
            echo "<h2>Formulario enviado con éxito</h2>";
            // Aquí puedes procesar los datos, almacenarlos o mostrarlos
        }
    }
    ?>

    <h1>Novell Services Login</h1>
    <form method="get" action="<?php echo test_input($_SERVER["PHP_SELF"]) ?>">
        Username: <input type="text" name="vUsername" value="<?php echo $inputUsername ?>"><br>
        <span class="error"> <?php echo $errorUsername ?></span> <br><br>

        PassWord: <input type="password" name="vPassword" value="<?php echo $inputPassword ?>"><br>
        <span class="error"> <?php echo $errorPassword ?></span> <br><br>

        City of Employment: <input type="text" name="vCity" value="<?php echo $cityemployement ?>"><br>
        <span class="error"> <?php echo $errorCity ?></span> <br><br>

        Web server:
        <select name="opcionWebServer"><br><br>
            <option value="">-Choose a server-</option>
            <option value="server1" <?php if (isset($opcionWebServer) && $opcionWebServer == "server1") echo "selected" ?>>Server1</option>
            <option value="server2" <?php if (isset($opcionWebServer) && $opcionWebServer == "server2") echo "selected" ?>>Server2</option>
        </select><br><br>

        Please specify Your role:<br>
        <input type="radio" name="status" value="admin" id="admin" <?php if (isset($status) && $status == "admin") echo "checked" ?>> <label for="admin">Admin</label><br>
        <input type="radio" name="status" value="engineer" id="engineer" <?php if (isset($status) && $status == "engineer") echo "checked" ?>> <label for="engineer">Engineer</label><br>
        <input type="radio" name="status" value="manager" id="manager" <?php if (isset($status) && $status == "manager") echo "checked" ?>> <label for="manager">Manager</label><br>
        <input type="radio" name="status" value="guest" id="guest" <?php if (isset($status) && $status == "guest") echo "checked" ?>> <label for="guest">Guest</label><br><br>

        Single Sign-on to the following:<br>
        <input type="checkbox" name="singed" value="mail" id="mail" <?php if (isset($singed) && $singed == "mail") echo "checked" ?>><label for="mail">Mail</label><br>
        <input type="checkbox" name="singed" value="payroll" id="payroll" <?php if (isset($singed) && $singed == "payroll") echo "checked" ?>><label for="payroll">Payroll</label><br>
        <input type="checkbox" name="singed" value="self-service" id="self-service" <?php if (isset($singed) && $singed == "self-service") echo "checked" ?>><label for="self-service">Self-service</label><br><br>

        <input type="reset" name="reset" value="Reset">
        <input type="submit" name="enviar" value="Send data">
    </form>
</body>

</html>