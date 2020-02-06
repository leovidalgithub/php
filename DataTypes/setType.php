<?php
    $var1 = "1";
    $var2 = 2;
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
            echo "var1 = '1' / ";
            echo "var2 = 2<hr>";

            echo "<span>gettype(var1) : </span>" . gettype($var1) . "<br/>";
            echo "<span>gettype(var2) : </span>" . gettype($var2) . "<hr/>";

            settype($var1,"integer");
            settype($var2,"string");

            echo "<span>gettype(var1) : </span>" . gettype($var1) . "<br/>";
            echo "<span>gettype(var2) : </span>" . gettype($var2) . "<hr/>";


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