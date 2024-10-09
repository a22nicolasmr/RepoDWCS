<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
        section,
        nav,
        article,
        aside {
            color: black;
            border: 0.1px black solid;
        }

        #section {
            display: flex;
            flex-direction: row;
            flex: 1;
            min-height: 0;
        }

        section {
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

        #divHyperlinkLogin,
        #divHyperlinkForm,
        #divHyperlinkUser {
            display: flex;
            background-color: white;
            flex: 0.20;
            justify-content: center;
            align-items: center;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 3%;
            color: black;
            border: 0.1px black solid;

            /* Reducir márgenes */
        }

        #buttonLogOut {
            background-color: #0000ff;
            color: white;
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;

            font-size: xx-large
        }

        span {
            display: flex;
            justify-content: center;
            margin-left: 8%;
            margin-right: 8%;

        }

        section>p {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            font-size: 80px;
            margin-left: 8%;
        }

        #divHyperlinkUser {
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
            font-size: xx-large;
        }

        #footerFuera {
            display: flex;
            flex: 0.10;
            justify-content: center;
            background-color: #c9daf8;
        }

        .error {
            color: red;
            font-size: xx-large;
        }
    </style>
</head>

<body>
    <?php

    ?>
    <header id="headerFuera">

    </header>

    <div id="section">
        <nav>

        </nav>
        <section>
            <p>Menu</p>
            <div id="divHyperlinkLogin">
                <a href="Login.php">Hyperlink to Login screen</a>
            </div>
            <div id="divHyperlinkForm">
                <a href="Form.php">Hyperlink to Form screen</a>
            </div>
            <span class="error"> Message error</span> <br>
            <div id="divHyperlinkUser">
                <a href="Data.php">Hyperlink to user´s data screen</a>
            </div>

            <input type="submit" value="Log out" id="buttonLogOut">

        </section>
        <aside>

        </aside>
    </div>

    <footer id="footerFuera">

    </footer>

</body>

</html>