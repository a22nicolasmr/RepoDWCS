<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage2</title>
</head>

<body>
    <h1>manage2</h1>
    <form method="get" action="manage.php?status=<?php ?>">
        <label for="nameSurnamesInput">Name and surnames: </label>
        <input type="text" name="nameSurnamesInput" value=<?php if (isset($inputValue) ? $inputValue : ""); ?>><br>
        <span class="error"><?php echo $errorNameSurnames; ?><br>

            <label for="select">Subject to enrrol: </label>
            <select name="select">
                <option>Select something</option>
                <option value="Java Programming" <?php if (isset($selectValue) && $selectValue === "Java Programming")
                                                        echo "selected"; ?>>Java Programming</option>

                <option value="Web design" <?php if (isset($selectValue) && $selectValue === "Web design")
                                                echo "selected"; ?>>Web design</option>

                <option value="Dockers administration" <?php if (isset($selectValue) && $selectValue === "Dockers administration")
                                                            echo "selected"; ?>>Dockers administration</option>

                <option value="Django framework" <?php if (isset($selectValue) && $selectValue === "Django framework")
                                                        echo "selected"; ?>>Django framework</option>

                <option value="Mongo database" <?php if (isset($selectValue) && $selectValue === "Mongo database")
                                                    echo "selected"; ?>>Mongo database</option>
            </select><br><br>

            <label for="person">In-person classes</label>
            <input type="radio" name="status" value="Person" ?><br>

            <label for="distance">Distance classes</label>
            <input type="radio" name="status" value="Distance" ?><br>

            <input type="submit" value="Send data" name="sendButton">
            <input type="submit" value="Go to Login" name="backLogin">

    </form>
</body>

</html>