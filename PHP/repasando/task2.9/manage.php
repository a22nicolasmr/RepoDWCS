<?php
session_start();

$inputValue = $_GET["nameSurnamesInput"];
$selectValue = $_GET["select"];
$resended = true;
echo $inputValue . " has selected " . $selectValue;

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="manage2.php?inputValue= <?php echo $inputValue; ?>&selectValue= <?php echo $selectValue; ?>">

        <input type="submit" name="buttonSubmit" value="Submit">
    </form>

</body>

</html>