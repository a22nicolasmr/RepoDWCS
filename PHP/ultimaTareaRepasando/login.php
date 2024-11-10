<?php
session_start();
function checkUsername($user, $pass): bool
{
    $valorReturn = false;
    $users = [
        ["user" => "u1", "pass" => "p1"],
        ["user" => "u2", "pass" => "p2"],
        ["user" => "u3", "pass" => "p3"],
    ];

    foreach ($users as $key) {
        if ($key["user"] == $user && $key["pass"] == $pass) {
            $valorReturn = true;
        }
    }
    return $valorReturn;
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$usernameError = $passwordError = $valorInputUsername = $valorInputPassword = $loginError = "";
if (isset($_GET["buttonLogin"])) {
    if (isset($_SESSION["username"])) {
        echo "You are already logged in";
    } else {
        if (empty(($_GET["inputUsername"]))) {
            $usernameError = "Username required";
        } else {
            $valorInputUsername = test_input($_GET["inputUsername"]);
        }

        if (empty(($_GET["inputPasword"]))) {
            $passwordError = "Password required";
        } else {
            $valorInputPassword = test_input($_GET["inputPasword"]);
        }

        if (checkUsername($valorInputUsername, $valorInputPassword)) {
            $_SESSION["username"] = test_input($_GET["inputUsername"]);

            $_SESSION["password"] = test_input($_GET["inputPasword"]);

            header("Location:formulario.php");
        } else {
            $loginError = "INCORRECT CREDENTIALS<br><br>";
        }
    }
}

if (isset($_GET["buttonLogout"])) {
    session_unset();
    session_destroy();

    echo "You are UNLOGGED";
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
    <h1>Login</h1>
    <form method="get" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>">
        Username:<input type="text" name="inputUsername"><br>
        <span class="error"><?php echo $usernameError; ?></span>
        <br><br>
        Password: <input type="password" name="inputPasword"><br>
        <span class="error"><?php echo $passwordError; ?></span>
        <br><br>

        <span class="error"><?php echo $loginError; ?></span>

        <input type="submit" value="Login" name="buttonLogin">
        <input type="submit" value="Logout" name="buttonLogout">

    </form>
</body>

</html>