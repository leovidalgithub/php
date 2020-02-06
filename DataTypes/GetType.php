<?php
    $var1 = 0;
    $var2 = "3.4";
    $var3 = NULL;
    $var4 = (int)$var2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type of Functions</title>
    <link rel="stylesheet" href="style.css?v=1.24">
</head>

<body>
    <div class="thisMain">
        <h3><span>Type of Functions</span></h3>

        <?php
            echo "var1 = 0 / ";
            echo "var2 = '3.4' / ";
            echo "var3 = NULL / ";
            echo "var4 = (int)var2 / <hr>";

            echo "gettype(var1) : " . gettype($var1) . "<br/>";
            echo "gettype(var2) : " . gettype($var2) . "<br/>";
            echo "gettype(var3) : " . gettype($var3) . "<br/>";
            echo "gettype(var4) : " . gettype($var4) . "<br/>";

        ?>
    </div>
    <script src="myscripts.js?v=1.24"></script>
</body>

</html>
<?php
function getBooleanText($_bool)
{
    return $_bool ? "True" : "False";
}
?>