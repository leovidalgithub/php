<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Globals</title>
    <link rel="stylesheet" href="../style.css?v=1.23">
</head>

<body>
    <div class="thisMain">
        <h3>Globals</h3>

    <?php
        echo getenv("HTTP_USER_AGENT") . "<br/>";
        echo $_SERVER["HTTP_USER_AGENT"] . "<br/>";
        echo "My application is " . getenv("APP_Name");
        echo "<br/>";
        putenv("APP_Name=Example4");
        echo "My application is " . getenv("APP_Name");
        echo "<br/>";
    ?>
    </div>
    <script src="../myscripts.js?v=1.21"></script>
</body>

</html>