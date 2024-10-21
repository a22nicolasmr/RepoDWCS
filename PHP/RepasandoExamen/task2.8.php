<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$usernameValue = $passwordValue = $selectValue = $statusValue = $emailValue = $errorUsername = $errorPassword = "";

if (isset($_POST["botonLogin"])) {
    if (empty($_POST["inputUsername"])) {
        $errorUsername = "Username obligatorio";
    } else {
        $usernameValue = test_input($_POST["inputUsername"]);
    }

    if (empty($_POST["inputPass"])) {
        $errorPassword = "Password obligatorio";
    } else {
        $passwordValue = test_input($_POST["inputPass"]);
    }

    $statusValue = $_POST["status"];
    $emailValue = $_POST["email"];
    echo ($selectValue = $_POST["selectServer"]);
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <br><br>
        <label for="inputUser">Username:</label>
        <input type="text" name="inputUsername" value=<?php echo $usernameValue ?>><br>
        <span class="error"><?php echo $errorUsername; ?></span>
        <br>

        <label for="inputPass">Password:</label>
        <input type="password" name="inputPass" value=<?php echo $passwordValue ?>><br><br>
        <span class="error"><?php echo $errorPassword; ?></span>
        <br>

        <label for="selectServer">Web server:</label>
        <select name="selectServer">

            <option value="">--Choose a server--</option>
            <option value="server1" <?php if (isset($selectValue) && $selectValue == "server1") echo "selected"; ?>>Server1</option>
            <option value="server2" <?php if (isset($selectValue) && $selectValue == "server2") echo "selected"; ?>>Server2</option>
        </select><br><br>

        <label for="admin">Admin</label>
        <input type="radio" value="admin" name="status" <?php if (isset($statusValue) && $statusValue == "admin") echo "checked"; ?>><br>

        <label for="none">None</label>
        <input type="radio" value="none" name="status" <?php if (isset($statusValue) && $statusValue == "none") echo "checked"; ?>><br><br>

        <input type="checkbox" value="checkboxMail" name="email" <?php if (isset($emailValue) && $emailValue == "checkboxMail") echo "checked"; ?>>
        <label for="checkboxMail">Mail</label><br>

        <input type="checkbox" value="checkboxPayrrol" name="email" <?php if (isset($emailValue) && $emailValue == "checkboxPayrrol") echo "checked"; ?>>
        <label for="checkboxPayrrol">Payrrol</label><br><br>

        <input type="submit" value="Login" name="botonLogin">
        <input type="reset" value="Reset">

    </form>
</body>

</html>