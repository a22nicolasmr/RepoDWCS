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

    $cookie_name = "name";
    $cookie_nameValue = $name;

    $cookie_subjectName = "subject";
    $cookie_subjectValue = $subject;

    $cookie_statusName = "status";
    $cookie_statusValue = $status;

    setcookie($cookie_name, $cookie_nameValue, time() + (86400 * 30), "/");

    setcookie($cookie_subjectName, $cookie_subjectValue, time() + (86400 * 30), "/");


    if (empty($name)) {
        $error = "Name required";
    }

    if ($error == "") {
        echo "$name wants to enroll in the following subject: $subject<br>";
    } else {
        echo "<span class='error'>$error</span><br>";
    }

    if (isset($_GET["status"])) {
        setcookie($cookie_statusName, $cookie_statusValue, time() + (86400 * 30), "/");
        echo "<br>" . $_GET["status"] . " is the selected option";
        if ($_COOKIE[$cookie_statusName]) {

            echo "<br>Cookie '" . $cookie_statusName . "' is set!<br>";
            echo "<br>Value is: " . $_COOKIE[$cookie_statusName];
        } else {
            echo "<br>Cookie named '" . $cookie_statusName . "' is not set!";
        }
    }

    if ($_COOKIE[$cookie_name]) {

        echo "<br>Cookie '" . $cookie_name . "' is set!<br>";
        echo "<br>Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "<br>Cookie named '" . $cookie_name . "' is not set!";
    }

    if ($_COOKIE[$cookie_subjectName]) {

        echo "<br>Cookie '" . $cookie_subjectName . "' is set!<br>";
        echo "<br>Value is: " . $_COOKIE[$cookie_subjectName];
    } else {
        echo "<br>Cookie named '" . $cookie_subjectName . "' is not set!";
    }

    ?>
    <br><a href="manage2.php?name=<?php echo $name; ?>&subjectEnroll=<?php echo $subject; ?>&status=<?php echo $status; ?>">Link to manage2</a>
</body>

</html>