<?php
function createSelect(array $values): void
{
    echo "<select name=subjectEnroll>";
    echo "<option value=\"\">Select option</option>";
    foreach ($values as $key => $value) {
        echo "<option value='$value'>$value</option>";
        //sin las comillas simples en value , no coge el string entero
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
    <form action="manage.php">
        <?php
        $opciones = [
            "Java Programming",
            "Web Design",
            "Dockers administration",
            "Django framework",
            "Mongo database"
        ];

        $name = $_GET["name"];
        $subjectId = $_GET["subjectId"];
        ?>
        <h1>Third page</h1>
        <label for="nameSurnames">Name and surnames:</label>
        <input type="text" name="name" value=<?php echo $name ?>><br>

        <label for="selectOption">Subject to enroll: </label><?php createSelect($opciones); ?><br>
        <input type="submit" value="Send data" name="sendData">

        <br>
        <br>
        <label for="person">In-person classes</label>
        <input type="radio" name="status" value="person"><br>

        <label for="distance">Distance classes</label>
        <input type="radio" name="status" value="distance">
    </form>


</body>

</html>