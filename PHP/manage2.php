<?php
function createSelect(array $values, $selectedValue): void
{
    echo "<select name='subjectEnroll'>";
    echo "<option value=''>Select option</option>";
    foreach ($values as $value) {
        $selected = $value === $selectedValue ? "selected" : "";
        echo "<option value='$value' $selected>$value</option>";
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
    <form action="manage.php" method="get">
        <?php
        $opciones = [
            "Java Programming",
            "Web Design",
            "Dockers administration",
            "Django framework",
            "Mongo database"
        ];

        // Obtener los valores desde la URL
        $name = $_POST["name"];
        $subject = $_POST["subjectEnroll"];
        $status = $_POST["status"];
        ?>
        <h1>Third page</h1>
        <label for="nameSurnames">Name and surnames:</label>
        <input type="text" name="name" value="<?php echo $name ?>"><br>

        <label for="selectOption">Subject to enroll: </label>
        <?php createSelect($opciones, $subject); ?><br>

        <label for="person">In-person classes</label>
        <input type="radio" name="status" value="Person" ?><br>

        <label for="distance">Distance classes</label>
        <input type="radio" name="status" value="Distance" ?><br>

        <input type="submit" value="Send data" name="sendData">
    </form>
</body>

</html>