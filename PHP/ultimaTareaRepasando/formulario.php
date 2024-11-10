<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$valorInputCompleteName = $valorGender = $valorStatus = $valorSelect = "";

if (isset($_GET["submitButton"])) {
    if (!empty($_GET["inputCompleteName"])) {
        $valorInputCompleteName = $_GET["inputCompleteName"];
        setcookie("inputCompleteName", $valorInputCompleteName);
    }

    if (!empty($_GET["gender"])) {
        $valorGender = $_GET["gender"];
        setcookie("gender", $valorGender);
    }

    if (!empty($_GET["status"])) {
        $valorStatus = $_GET["status"];
        setcookie("status", $valorStatus);
    }

    if (!empty($_GET["select"])) {
        $valorSelect = $_GET["select"];
        setcookie("select", $valorSelect);
    }
}
if (isset($_GET["dataButton"])) {
    header("Location:data.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario</h1>
    <form method="get" action="<?php echo test_input($_SERVER["PHP_SELF"]); ?>">
        Complete name:<input type="text" name="inputCompleteName" value=<?php echo $valorInputCompleteName; ?>><br>

        Male:<input type="radio" name="gender" value="Male" <?php if (isset($valorGender) && $valorGender == "Male") echo "checked" ?>>

        Female:<input type="radio" name="gender" value="Female" <?php if (isset($valorGender) && $valorGender == "Female") echo "checked" ?>><br>

        Employed:<input type="checkbox" name="status" value="Employed" <?php if (isset($valorStatus) && $valorStatus == "Employed") echo "checked" ?>>

        Unemployed:<input type="checkbox" name="status" value="Unemployed" <?php if (isset($valorStatus) && $valorStatus == "Unemployed") echo "checked" ?>><br>

        <select name="select">
            <option value="WEB sometion" <?php if (isset($valorSelect) && $valorSelect == "WEB sometion") echo "selected" ?>>WEB sometion</option>
            <option value="PROG sdfsdfsdfsd" <?php if (isset($valorSelect) && $valorSelect == "PROG sdfsdfsdfsd") echo "selected" ?>>PROG sdfsdfsdfsd</option>
            <option value="CARREER asdjasdas" <?php if (isset($valorSelect) && $valorSelect == "CARREER asdjasdas") echo "selected" ?>>CARREER asdjasdas</option>
        </select><br>

        <input type="submit" value="Submit" name="submitButton">
        <input type="submit" value="Go to data" name="dataButton">
    </form>
</body>

</html>