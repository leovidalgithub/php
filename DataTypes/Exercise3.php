<?php
    putenv("APP_NAME=EXERCISE 3") . "<br/>";
    $PHPv = $_SERVER["SERVER_SOFTWARE"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercise 3</title>
    <link rel="stylesheet" href="../style.css?v=1.24">
</head>

<body>
    <div class="thisMain">
        <h3><span>Exercise 3</span></h3>

        <?php
            echo "<span>My application is </span>" . getenv("APP_NAME") . "<br/>";
            echo "<span>Operating System : </span><code>" . php_uname() . "</code><br/>";
            echo "<span>PHP version : </span>" . phpversion() . "<br/>";
            echo "<span>PHP version on detail : </span>" . $PHPv . "<br/>";
            echo "<span>Client IP address : </span>" . $_SERVER['REMOTE_ADDR'] . "<br/>";
            echo "<span>Navigator language : </span>" . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br/>";
            echo "<span>PHP home directory : </span>" . $_SERVER['DOCUMENT_ROOT'];
        ?>
    </div>
    <script src="../myscripts.js?v=1.24"></script>
</body>

</html>