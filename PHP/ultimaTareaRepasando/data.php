<?php
echo "inputCompleteName= " . $_COOKIE["inputCompleteName"] . "<br>";
echo "gender= " . $_COOKIE["gender"] . "<br>";
echo "status= " . $_COOKIE["status"] . "<br>";
echo "select= " . $_COOKIE["select"] . "<br>";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="paginaFinal.php?gender= <?php echo $_COOKIE["gender"]; ?>&completeName=<?php echo $_COOKIE["inputCompleteName"]; ?>">LINK A LA PAGINA FINAL</a>
</body>

</html>