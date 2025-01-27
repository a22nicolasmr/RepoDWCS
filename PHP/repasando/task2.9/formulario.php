<?php
session_start();
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errorNameSurnames = $inputValue = $selectValue = "";
if (isset($_GET["sendButton"])) {
    if (empty($_GET["nameSurnamesInput"])) {
        $errorNameSurnames = "Campo obligatorio";
    } else {
        $inputValue = test_input($_GET["nameSurnamesInput"]);
        $selectValue = $_GET["select"];

        $_SESSION["inputValue"] = $inputValue;
        $_SESSION["selectValue"] = $selectValue;
        header("Location:manage.php?nameSurnamesInput=" . $inputValue . "&select=" . $selectValue);
    }
}

if ($_GET["resended"] == true) {
}

if (isset($_GET["backLogin"])) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Primera pagina</h1>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nameSurnamesInput">Name and surnames: </label>
        <input type="text" name="nameSurnamesInput" value=<?php if (isset($inputValue) ? $inputValue : ""); ?>><br>
        <span class="error"><?php echo $errorNameSurnames; ?><br>

            <label for="select">Subject to enrrol: </label>
            <select name="select">
                <option>Select something</option>
                <option value="Java Programming" <?php if (isset($selectValue) && $selectValue === "Java Programming")
                                                        echo "selected"; ?>>Java Programming</option>

                <option value="Web design" <?php if (isset($selectValue) && $selectValue === "Web design")
                                                echo "selected"; ?>>Web design</option>

                <option value="Dockers administration" <?php if (isset($selectValue) && $selectValue === "Dockers administration")
                                                            echo "selected"; ?>>Dockers administration</option>

                <option value="Django framework" <?php if (isset($selectValue) && $selectValue === "Django framework")
                                                        echo "selected"; ?>>Django framework</option>

                <option value="Mongo database" <?php if (isset($selectValue) && $selectValue === "Mongo database")
                                                    echo "selected"; ?>>Mongo database</option>
            </select><br><br>

            <input type="submit" value="Send data" name="sendButton">
            <input type="submit" value="Go to Login" name="backLogin">

    </form>
</body>

</html>