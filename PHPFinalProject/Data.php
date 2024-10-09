<?php
session_start();
$usernameValue = "";
if (isset($_SESSION["username"])) {
    $usernameValue = $_SESSION["username"];
} else {
    $usernameValue = "Nobody";
}

$firstName = $_POST["inputFirstName"];
$lastName = $_POST["inputLastName"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
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
            background-color: #c9daf8;
        }

        header,
        footer,
        form,
        nav,
        article,
        aside,
        div>p {
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
            background-color: white;
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

        #divUsername>p,
        #divRestData>p {
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

        #buttonMenu {
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

        a {
            margin-left: 2%;
            margin-right: 2%;
            margin-bottom: 2%;
            margin-top: 2%;
        }

        #footerFuera {
            display: flex;
            flex: 0.10;
            justify-content: center;
            background-color: #c9daf8;
        }

        .error {
            color: red;
        }

        div>p {
            font-size: xx-large;
        }
    </style>
</head>

<body>
    <header id="headerFuera">

    </header>

    <div id="form">
        <nav>

        </nav>
        <form action="Menu.php">
            <p>Data</p>
            <div id="divUsername">
                <p><?php echo $usernameValue ?> was registered at the web page.</p>
            </div>
            <div id="divRestData">
                <p><?php echo $firstName . " " . $lastName ?> with email email y employed/unemployed and is a man/woman</p>
            </div>
            <input type="submit" value="Menu" id="buttonMenu">

        </form>
        <aside>

        </aside>
    </div>

    <footer id="footerFuera">

    </footer>

</body>

</html>