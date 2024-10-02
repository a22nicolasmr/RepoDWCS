<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
</head>

<body>
    <?php
    $name = $subject = "";

    if ($name = $_GET["name"]) {
        $name = $_GET["name"];
    }

    if ($subject = $_GET["subjectEnroll"]) {
        $subject = $_GET["subjectEnroll"];
    }
    echo $name . " wants to enrol in the following subjects: " . $subject;
    ?>
    <br><a href="manage2.php">Link to manage2</a>
</body>

</html>