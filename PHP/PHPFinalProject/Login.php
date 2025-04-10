<?php
session_start();

// It checks if the username ("n") and password ("p") are correct. 
// If true, the user will be redirected to the Menu.
// If false, an error will be displayed.
function check_user($username, $password): bool
{
    $result = false;
    if ($username === "n" && $password === "p") {
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
$loginError = $inputUsername = $inputPassword = "";

if (isset(($_POST["submit"]))) {

    if (isset($_SESSION["username"])) {
        $loginError = "You are already logged";
    } else {
        if (empty($_POST["inputUsername"])) {
            $loginError = "Incorrect credentials";
        } else {
            $inputUsername = test_input($_POST["inputUsername"]);
        }

        if (empty($_POST["inputPassword"])) {
            $loginError = "Incorrect credentials";
        } else {
            $inputPassword = test_input($_POST["inputPassword"]);
        }

        if (check_user($inputUsername, $inputPassword)) {

            $_SESSION['username'] = $inputUsername;
            $_SESSION['password'] = $inputPassword;
            header("Location: Menu.php");
            exit();
        } else {
            $loginError = "Incorrect credentials";
        }
    }
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
            padding: 0;
            background-color: #6d9eeb;
        }

        #headerFuera {
            display: flex;
            flex: 0.10;
            justify-content: center;
            background-color: #6d9eeb;
        }

        #firstForm,
        article,
        #headerform>header {
            color: black;
            border: 0.1px black solid;
        }

        #firstForm {
            display: flex;
            flex-direction: row;
            flex: 1;
            min-height: 0;
        }

        #firstForm {
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

        #buttonBack {
            background-color: #0000ff;

            color: white;
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 8%;

            font-size: xx-large;
        }

        span {
            color: red;
            font-size: large;

            margin-left: 8%;

            margin-right: 2%;

            margin-bottom: 2%;

            text-align: left;

        }
    </style>
</head>

<body>
    <header id="headerFuera">

    </header>

    <div id="form">
        <nav>

        </nav>
        <form method="post" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>" id="firstForm">
            <p>Sign in</p>
            <!--this line checks if is any username in the session; if is true in the input will appear this name , in the other case the input will stay empty -->
            <input type="text" name="inputUsername" placeholder="Username" id="idUsername" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
            <input type="password" name="inputPassword" placeholder="Password" id="idPassword">
            <span class="error"><?php echo $loginError ?></span> <br>
            <input type="submit" value="Send" id="buttonSend" name="submit">

        </form>
        <div id="divBackMenu">
            <form action="Menu.php" id="formBackMenu">
                <input type="submit" value="Menu" id="buttonBack" name="backMenu">
            </form>
        </div>
        <aside>

        </aside>
    </div>

    <footer id="footerFuera">

    </footer>

</body>

</html>