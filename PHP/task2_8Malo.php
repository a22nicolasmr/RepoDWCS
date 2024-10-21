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
    $inputUsername = $inputPassword = $cityemployement = $errorUsername = $errorPassword = $errorCity = "";
    if (isset($_POST["enviar"])) {
        if (empty($_POST["vUsername"])) {
            $errorUsername = "Username obligatorio";
        } else {
            $inputUsername = $_POST["vUsername"];
        }
        if (empty($_POST["vPassword"])) {
            $errorPassword = "Password obligatorio";
        } else {
            $inputPassword = $_POST["vPassword"];
        }
        if (empty($_POST["vCity"])) {
            $errorCity = "City obligatorio";
        } else {
            $cityemployement = $_POST["vCity"];
        }

        if ($errorUsername = $errorCity = $errorPassword == "") {
    ?>


    <?php
        }
    }

    ?>

    <h1>Novell Services Login</h1>
    <form method="get" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name=<?php echo $inputUsername ?> placeholder=""><br><br>
        <span class="error"> <?php echo $errorUsername ?></span> <br>
        PassWord: <input type="text" name="vPassword" placeholder=""><br><br>
        <span class="error"> <?php echo $errorPassword ?></span> <br>
        City of Employment: <input type="text" name="vCity" placeholder=""><br><br>
        <span class="error"> <?php echo $errorCity ?></span> <br>
        Web server:
        <select name="opcion"><br><br>
            <option selected="true" disabled="disabled">-Choose a server-</option>
            <option value="server1">Server1</option>
            <option value="server2">Server2</option>
        </select><br><br>

        Please specify Your role:<br>
        <input type="radio" name="status" value="admin" id="admin"> <label for="admin">Admin</label><br>
        <input type="radio" name="status" value="engineer" id="engineer"> <label for="engineer">Engineer</label><br>
        <input type="radio" name="status" value="manager" id="manager"> <label for="manager">Manager</label><br>
        <input type="radio" name="status" value="guest" id="guest"> <label for="guest">Guest</label><br><br>

        Single Sign-on to the following:<br>
        <input type="checkbox" name="singed" value="mail" id="mail"><label for="mail">Mail</label><br>
        <input type="checkbox" name="singed" value="payroll" id="payroll"><label for="payroll">Payroll</label><br>
        <input type="checkbox" name="singed" value="self-service" id="self-service"><label for="self-service">Self-service</label><br><br>
        <input type="reset" name="reset" value="Reset">
        <input type="submit" name="enviar" value="Send data">

    </form>
</body>


</html>