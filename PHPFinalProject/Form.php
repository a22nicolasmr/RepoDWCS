<?php
session_start();
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$formError = $inputFirstName = $inputLastName = $inputEmail = $status = $selectValue = "";

// If the send button is pressed, it checks if the input fields are empty.
// If they are empty, an error message will be shown.
// If they are not empty, their values will be stored in session variables.
if (isset($_POST["send"])) {
    if (isset($_POST["inputFirstName"]) && empty($_POST["inputFirstName"])) {
        $formError = "Input fields are mandatory";
    } else {
        $inputFirstName = $_POST["inputFirstName"];
        $_SESSION["firstName"] = test_input($_POST["inputFirstName"]);
    }

    if (isset($_POST["inputLastName"]) && empty($_POST["inputLastName"])) {
        $formError = "Input fields are mandatory";
    } else {
        $inputLastName = $_POST["inputLastName"];
        $_SESSION["lastName"] = test_input($_POST["inputLastName"]);
    }

    if (isset($_POST["inputEmail"]) && empty($_POST["inputEmail"])) {
        $formError = "Input fields are mandatory";
    } else {
        $inputEmail = $_POST["inputEmail"];
        $_SESSION["email"] = test_input($_POST["inputEmail"]);
    }

    if (isset($_POST["status"])) {
        $status = test_input($_POST["status"]);
        $_SESSION["status"] = $status;
    }
    if (isset($_POST["selectValue"])) {
        $selectValue = test_input($_POST["selectValue"]);
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
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #6d9eeb;
        }

        #form {
            margin-top: 10%;
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        #firstForm {
            display: flex;
            flex-direction: column;
            background-color: #c9daf8;
            padding: 70px;
            width: 100%;
            height: 60%;
            max-width: 900px;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 0;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            font-size: medium;
        }

        #buttonsend {
            background-color: #0000ff;
            color: white;
            padding: 10px;
            margin-top: 10px;
            width: 100%;
            font-size: large;
        }

        #divBackMenu {
            display: flex;
            flex: 1;
            justify-content: center;
            margin-top: 20px;
        }

        #buttonBack {
            background-color: #0000ff;
            color: white;
            padding: 10px;
            margin-top: 10px;
            width: 15vw;
            font-size: large;
        }

        #radioButtons {
            display: flex;
            flex-direction: row;
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
                <form method="post" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>" id="firstForm">
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