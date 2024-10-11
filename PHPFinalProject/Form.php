<?php
session_start();

$formError = $inputFirstName = $inputLastName = $inputEmail = $status = $selectValue = "";

//if the button send is pressed it checks if the input fields are empty
//if they are empty an error message will be shown
//if the are not empty their values will be stored into session variables
if (isset($_POST["send"])) {
    if (isset($_POST["inputFirstName"]) && empty($_POST["inputFirstName"])) {
        $formError = "Input fields are mandatory";
    } else {
        $inputFirstName = $_POST["inputFirstName"];
        $_SESSION["firstName"] = $_POST["inputFirstName"];
    }

    if (isset($_POST["inputLastName"]) && empty($_POST["inputLastName"])) {
        $formError = "Input fields are mandatory";
    } else {
        $inputLastName = $_POST["inputLastName"];
        $_SESSION["lastName"] = $_POST["inputLastName"];
    }

    if (isset($_POST["inputEmail"]) && empty($_POST["inputEmail"])) {
        $formError = "Input fields are mandatory";
    } else {
        $inputEmail = $_POST["inputEmail"];
        $_SESSION["email"] = $_POST["inputEmail"];
    }

    if (isset($_POST["status"])) {
        $status = $_POST["status"];
        $_SESSION["status"] = $status;
    }
    if (isset($_POST["selectValue"])) {
        $selectValue = $_POST["selectValue"];
        $_SESSION["selectValue"] = $selectValue;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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

        #buttonsend {
            background-color: #0000ff;
            color: white;
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 2%;

            font-size: xx-large;
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

        form>p {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            font-size: 80px;
            margin-left: 8%;
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

        input {
            margin-left: 2%;
            margin-right: 2%;
            margin-bottom: 2%;
            margin-top: 2%;
        }

        .error {
            color: red;
        }

        #idEmail {
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 3%;
            font-size: xx-large;
        }

        #divInputsName {
            display: flex;
            flex-direction: row;
        }

        #idLastName {
            display: flex;
            flex: 0.47;
            margin-bottom: 3%;
            font-size: xx-large;
        }

        #idFirstName {
            display: flex;
            flex: 0.46;
            margin-left: 8%;
            margin-bottom: 3%;
            font-size: xx-large;
        }

        #radioButtons {
            margin-left: 8%;
            font-size: x-large;
        }

        select {
            width: 40%;
            height: 70%;
            margin-left: 8%;

        }

        .error {
            color: red;
        }

        section {
            display: flex;
            flex-direction: row;
            flex: 0.6;
            min-height: 0;
        }



        nav,
        aside {
            background-color: #6d9eeb;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 0.80;
        }
    </style>

</head>

<body>
    <header id="headerFuera"></header>

    <div id="form">
        <nav>

        </nav>
        <div id="divSection">
            <section>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="firstForm">
                    <p>Form</p>
                    <div id="divInputsName">
                        <input type="text" name="inputFirstName" placeholder="First Name" id="idFirstName" value="<?php echo isset($_POST['inputFirstName']) ? $inputFirstName : ''; ?>">
                        <input type="text" name="inputLastName" placeholder="Last Name" id="idLastName" value="<?php echo isset($_POST['inputLastName']) ? $inputLastName : ''; ?>">
                    </div>

                    <input type="text" name="inputEmail" placeholder="Email" id="idEmail" value="<?php echo isset($_POST['inputEmail']) ? $inputEmail : ''; ?>">
                    <span class="error"><?php echo $formError ?></span>
                    <div id="radioButtons">
                        <label for="employed">Employed</label>
                        <input type="radio" value="Employed" name="status" <?php if (isset($status) && $status == "Employed") echo "checked" ?>>
                        <label for="unemployed">Unemployed</label>
                        <input type="radio" value="Unemployed" name="status" <?php if (isset($status) && $status == "Unemployed") echo "checked" ?>>
                    </div>

                    <select name="selectValue" id="selectGenre">
                        <option value="">--Select one--</option>
                        <option value="Man" <?php if (isset($selectValue) && $selectValue == "Man") echo "selected" ?>>Man</option>
                        <option value="Woman" <?php if (isset($selectValue) && $selectValue == "Woman") echo "selected" ?>>Woman</option>
                        <option value="Other" <?php if (isset($selectValue) && $selectValue == "Other") echo "selected" ?>>Other</option>
                    </select>

                    <input type="submit" value="Send" id="buttonsend" name="send">
                    <aside>

                    </aside>
                </form>
            </section>
        </div>


    </div>
    <div id="divBackMenu">
        <form action="Menu.php" id="formBackMenu">
            <input type="submit" value="Menu" id="buttonBack" name="backMenu">
        </form>
    </div>
</body>

</html>