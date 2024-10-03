<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Second page</h1>
    <?php

    $name = $_GET["name"];
    $subject = $_GET["subjectEnroll"];
    $error = "";
    if (empty($_GET["name"])) {
        $error = "Name required";
    }
    if ($error == "") {
        echo $name . " wants to enroll in the following subject: " . $subject;
    } else {
        echo "<span class='error'> $error </span><br>";
    }

    ?>
    <br><a href="manage2.php">Link to manage2</a>
</body>

</html>