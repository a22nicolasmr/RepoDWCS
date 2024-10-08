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


        section,
        article,
        #headerSection>header {
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

        #headerSection>header,
        #articleSection>article,
        #footerSection>footer {
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

        section>p {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            font-size: 80px;
            margin-left: 8%;
        }

        #footerSection>footer {
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
    <header id="headerFuera">

    </header>

    <div id="section">
        <nav>

        </nav>
        <section>
            <p>Sign in</p>
            <input type="text" name="inputUsername" placeholder="Username" id="idUsername">
            <input type="text" name="inputPassword" placeholder="Password" id="idPassword">
            <span class="error"> Menssage error</span> <br>
            <input type="submit" value="Send" id="buttonSend">

        </section>
        <aside>

        </aside>
    </div>

    <footer id="footerFuera">

    </footer>

</body>

</html>