<?php
session_start();
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// These if statements check if the session variables exist.
// If true, their values will be shown; if false, default values will be shown.
$usernameValue = $firstName = $lastName = $email = $status = $selectValue = "";
if (isset($_SESSION["username"])) {
    $usernameValue = test_input($_SESSION["username"]);
} else {
    $usernameValue = "no username";
}

if (isset($_SESSION["firstName"])) {
    $firstName = test_input($_SESSION["firstName"]);
} else {
    $firstName = "no first name";
}

if (isset($_SESSION["lastName"])) {
    $lastName = test_input($_SESSION["lastName"]);
} else {
    $lastName = "no last name";
}

if (isset($_SESSION["email"])) {
    $email = test_input($_SESSION["email"]);
} else {
    $email = "no email";
}
if (isset($_SESSION["status"])) {
    $status = test_input($_SESSION["status"]);
} else {
    $status = "no status";
}

if (isset($_SESSION["selectValue"])) {
    $selectValue = test_input($_SESSION["selectValue"]);
} else {
    $selectValue = "no genre";
}

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
            padding: 0;
            box-sizing: border-box;
        }

        #headerFuera,
        #footerFuera {
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
            overflow: hidden;
        }

        form {
            display: flex;
            flex: 1;
            flex-direction: column;
            background-color: white;
            padding: 1rem;
        }

        nav,
        aside {
            background-color: #6d9eeb;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 0.20;
        }

        #divUsername>p,
        #divRestData>p {
            display: flex;
            background-color: white;
            flex: 1;
            justify-content: center;
            align-items: center;
            margin: 7% 0;
            text-align: center;
        }

        #buttonMenu {
            background-color: #0000ff;
            color: white;
            display: block;
            margin: 7% auto;
            padding: 1rem;
            font-size: xx-large;
            width: 80%;
        }

        span {
            display: flex;
            justify-content: center;
            margin: 8% 0;
        }

        form>p {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            font-size: 2em;
            margin-left: 0;
            text-align: center;
        }

        #footerform>footer {
            display: flex;
            background-color: white;
            flex: 0.20;
            justify-content: center;
            align-items: center;
        }

        a {
            margin: 2%;
        }


        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {

            nav,
            aside {
                flex: 0.15;
                /* Reduce side panels on smaller screens */
            }

            form>p {
                font-size: 1.5em;
                /* Smaller font size for smaller screens */
            }

            #buttonMenu {
                font-size: large;
                /* Smaller button text */
                width: 90%;
                /* Make button width responsive */
            }
        }

        @media (max-width: 480px) {
            form>p {
                font-size: 1.2em;
                /* Smaller font size for very small screens */
            }

            #buttonMenu {
                font-size: medium;
                /* Smaller button text */
                width: 95%;
                /* Make button width responsive */
                margin-bottom: 5%;
            }
        }

        .error {
            color: red;
        }

        div>p {
            font-size: 2em;
            /* Use relative units for better scaling */
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
                <p><?php echo $firstName . " " . $lastName ?> with email <?php echo $email ?> is <?php echo $status ?> and is a <?php echo $selectValue ?></p>
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