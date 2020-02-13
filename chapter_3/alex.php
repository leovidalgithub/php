<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form class="container" name="theForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="submit" value="Get Multiplication Talbe">
    </form>

    <?php echo "<h1>FIRST</h1>"; ?>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h1>POST</h1>";
        }
        ?>
    <?php echo "<h1>LAST</h1>"; ?>

</body>

</html>