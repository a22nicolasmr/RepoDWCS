<?php
function check_user($username, $password): bool
{
    $result = false;
    if ($username == "n" && $password == "p") {
        $result = true;
    }
    return $result;
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

            margin: 0;
            /* Quitar márgenes del body */
            padding: 0;
        }

        #headerFuera {
            display: flex;
            flex: 0.10;
            justify-content: center;
            background-color: #6d9eeb;
        }


        form,
        article,
        #headerform>header {
            color: black;
            border: 0.1px black solid;
        }

        #form {
            display: flex;
            flex-direction: row;
            flex: 1;
            min-height: 0;
        }

        form {
            display: flex;
            flex: 1;
            flex-direction: column;
            background-color: #c9daf8;
        }

        nav,
        aside {
            background-color: #6d9eeb;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 0.20;
            /* Reducir márgenes */
        }

        #headerform>header,
        #articleform>article,
        #footerform>footer {
            display: flex;
            background-color: white;
            flex: 0.20;
            justify-content: center;
            align-items: center;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 8%;

            /* Reducir márgenes */
        }

        #buttonSend {
            background-color: #0000ff;
            color: white;
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 8%;
            font-size: xx-large
        }

        span {
            display: flex;
            justify-content: center;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 8%;
        }

        form>p {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            font-size: 80px;
            margin-left: 8%;
        }

        #footerform>footer {
            display: flex;
            background-color: white;
            flex: 0.20;
            justify-content: center;
            align-items: center;

            /* Reducir márgenes */
        }

        input {
            margin-left: 2%;
            margin-right: 2%;
            margin-bottom: 2%;
            margin-top: 2%;


        }

        #footerFuera {
            display: flex;
            flex: 0.10;
            justify-content: center;
            background-color: #6d9eeb;
        }

        .error {
            color: red;
            font-size: xx-large;
        }

        #idUsername,
        #idPassword {
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 3%;
            font-size: xx-large
        }
    </style>
</head>

<body>
    <?php
    $loginError = $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == $_POST) {
        if (empty($_POST["inputUsername"])) {
            $loginError = "Incorrect credentials";
        } else {
            $username = test_input($_POST["inputUsername"]);
        }
        if (empty($_POST["inputPassword"])) {
            $loginError = "Incorrect credentials";
        } else {
            $password = test_input($_POST["inputPassword"]);
        }

        if (check_user($username, $password)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: Menu.php");
        } else {
            $loginError = "Incorrect credentials";
        }
    }
    ?>
    <header id="headerFuera">

    </header>

    <div id="form">
        <nav>

        </nav>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>Sign in</p>
            <input type="text" name="inputUsername" placeholder="Username" id="idUsername">
            <input type="password" name="inputPassword" placeholder="Password" id="idPassword">
            <span class="error"><?php echo $loginError ?></span> <br>
            <input type="submit" value="Send" id="buttonSend">

        </form>
        <aside>

        </aside>
    </div>

    <footer id="footerFuera">

    </footer>

</body>

</html>