<?php
function checkLogin($user, $pass): bool
{
    $returnValue = false;
    $users = [
        ["user" => "u1", "pass" => "p1"],
        ["user" => "u2", "pass" => "p2"],
        ["user" => "u3", "pass" => "p3"],
    ];

    foreach ($users as $value) {
        if ($value["user"] === $user && $value["pass"] === $pass) {
            $returnValue = true;
            break;
        }
    }
    return $returnValue;
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errorUsername = $errorPassword = $inputUsername = $inputPassword = $errorLogin = "";

if ($_POST["buttonLogin"]) {

    if (isset($_SESSION["username"])) {
        $errorLogin = "You are already logged";
    } else {
        if (empty($_POST["inputUsername"])) {
            $errorUsername = "Username obligatorio";
        } else {
            $inputUsername = test_input($_POST["inputUsername"]);
        }

        if (empty($_POST["inputPassword"])) {
            $errorPassword = "Password obligatorio";
        } else {
            $inputPassword = test_input($_POST["inputPassword"]);
        }

        if (checkLogin($inputUsername, $inputPassword)) {
            $_SESSION["username"] = $inputUsername;
            $_SESSION["password"] = $inputPassword;
            header("Location: formulario.php");
            exit();
        } else {
            $errorLogin = "Incorrect credentials";
        }
    }
}
if ($_POST["buttonLogout"]) {
    session_unset();
    session_destroy();

    echo "<br><p>You have been unlogged</p>";
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="inputUsername">Username:</label>
        <input type="text" name="inputUsername"><br>
        <span class="error"><?php echo $errorUsername; ?><br>

            <label for="inputPassword">Password:</label>
            <input type="password" name="inputPassword"><br>
            <span class="error"><?php echo $errorPassword; ?><br>

                <input type="submit" value="Login" name="buttonLogin">
                <input type="submit" value="Logout" name="buttonLogout"><br>
                <span class="error"><?php echo $errorLogin; ?><br>
    </form>


</body>

</html>