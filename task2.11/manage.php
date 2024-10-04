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
    $status = $_GET["status"];
    $error = "";

    $valorRadioButton = "";

    if (empty($name)) {
        $error = "Name required";
    }

    if ($error == "") {
        echo "$name wants to enroll in the following subject: $subject<br>";
    } else {
        echo "<span class='error'>$error</span><br>";
    }

    if (isset($_GET["status"])) {
        echo "<br>" . $_GET["status"] . " is the selected option";
    }
    ?>
    <br><a href="manage2.php?name=<?php echo $name; ?>&subjectEnroll=<?php echo $subject; ?>&status=<?php echo $status; ?>">Link to manage2</a>
</body>

</html>