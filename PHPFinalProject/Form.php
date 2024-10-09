<?php
session_start();

$formError = $inputFirstName = $inputLastName = $inputEmail = $status = $selectValue = "";
if (isset($_POST["send"])) {
    if (empty(($_POST["inputFirstName"]))) {
        $formError = "Input fields are mandatory";
    } else {
        $inputFirstName = $_POST["inputFirstName"];
    }

    if (empty(($_POST["inputLastName"]))) {
        $formError = "Input fields are mandatory";
    } else {
        $inputLastName = $_POST["inputLastName"];
    }

    if (empty(($_POST["inputEmail"]))) {
        $formError = "Input fields are mandatory";
    } else {
        $inputEmail = $_POST["inputEmail"];
    }

    if (empty(($_POST["status"]))) {
    } else {
        $status = $_POST["status"];
    }

    if (empty(($_POST["selectValue"]))) {
    } else {
        $selectValue = $_POST["selectValue"];
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
            /* Espacio reducido entre botones */
            font-size: xx-large;
        }

        #buttonBack {
            background-color: #0000ff;
            /* Mantiene el mismo color que el botón de enviar */
            color: white;
            display: flex;
            flex: 0.20;
            margin-left: 8%;
            margin-right: 8%;
            margin-bottom: 8%;
            /* Espacio por debajo del botón de atrás */
            font-size: xx-large;
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

        #idSelectGenre {
            width: 20%;
            height: 20%;
            margin-left: 8%;
        }

        .error {
            color: red;
        }

        #formBackMenu {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <header id="headerFuera"></header>

    <div id="form">
        <nav></nav>
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

            <select name="selectValue">
                <option value="">--Select one--</option>
                <option value="Male" <?php if (isset($selectValue) && $selectValue == "Male") echo "selected" ?>>Male</option>
                <option value="Female" <?php if (isset($selectValue) && $selectValue == "Female") echo "selected" ?>>Female</option>
                <option value="Other" <?php if (isset($selectValue) && $selectValue == "Other") echo "selected" ?>>Other</option>
            </select>

            <input type="submit" value="Send" id="buttonsend" name="send">
        </form>


        <aside></aside>
    </div><br>
    <div id="divBackMenu">
        <form action="Menu.php" id="formBackMenu">
            <input type="submit" value="Back to the Menu" id="buttonBack" name="backMenu">
        </form>
    </div>

    <footer id="footerFuera"></footer>
</body>

</html>