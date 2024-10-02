<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function createSelect(array $values): void
{
    echo "<select name=subjectEnroll>";
    echo "<option value=\"\">Select option</option>";
    foreach ($values as $key => $value) {
        echo "<option value=.$key.>$value</option>";
    }
    echo "</select>";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task formulario</title>
</head>

<body>
    <?php
    $opciones = [
        "Java Programming",
        "Web Design",
        "Dockers administration",
        "Django framework",
        "Mongo database"
    ];
    ?>
    <h1>First practice using forms</h1>
    <label for="nameSurnames">Name and surnames:</label>
    <input type="text" name="name"><br>

    <label for="selectOption">Subject to enroll: </label><?php createSelect($opciones); ?><br>
    <input type="button" value="Send data" name="sendData">

</body>

</html>