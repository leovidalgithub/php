<?php
    $cookie_name = "user";
    $cookie_value = "This is your cookie value";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global Variables</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../style.css?v=1.23">
</head>

<body>
    <?php
        $var1 = 75;
        $var2 = 25;
    ?>
    <div class="thisMain">
        <h3>Global Variables</h3>

        <?php
            $GLOBALS['var3'] = $GLOBALS['var1'] + $GLOBALS['var2'];
            echo 'This is a $GLOBAL variable called $var3 = ' . $var3 . "<br>";
            echo $_SERVER['PHP_SELF'] . "<br>";
            echo $_SERVER['SERVER_NAME'] . "<br>";
            echo $_SERVER['SERVER_PORT'] . "<br>";
            echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
            echo $_SERVER['SCRIPT_NAME'] . "<br>";
            echo $_SERVER['REMOTE_PORT'] . "<br>";
        ?><hr>

        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        };
        ?>
    </div>
    <script src="../myscripts.js?v=1.21"></script>
</body>

</html>