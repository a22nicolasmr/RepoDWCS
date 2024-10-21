<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $nome = $email = $nameErr = "";
    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["enviar"])) {
        //The field name is required
        if (empty($_POST["vNome"])) {
            $nameErr = "Name is required";
        } else {
            $nome = test_input($_POST["vNome"]);
        }
        $email = test_input($_POST["vEmail"]);
        if ($nameErr == "") {
            echo "Welcome " . $nome . "<br>";
            echo "Your email address is: " . $email;
        }
    } //if

    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        Name: <input type="text" name="vNome">
        <span class="error"> <?php echo $nameErr; ?> </span>
        <br>E-mail: <input type="text" name="vEmail" value=<?php echo $email ?>><br>
        <input type="submit" name="enviar" value="Send data">
    </form>

</body>

</html>