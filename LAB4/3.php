<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

    echo "<h2>List of Fruits:</h2>";
    foreach ($fruits as $fruit) {
        echo "$fruit <br>";
    }
    ?>
</body>
</html>