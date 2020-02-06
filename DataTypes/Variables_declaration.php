<?php
    $var1 = 123;
    $var6 = 0;

    $var2 = "Car";
    $var7 = "";

    $var3 = NULL;
    $var4;
    // $var5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables Declaration</title>
    <link rel="stylesheet" href="../style.css?v=1.24">
</head>

<body>
    <div class="thisMain">
        <h3><span>Variables Declaration</span></h3>

        <?php
        echo "var1 = 123 / var6 = 0 / ";
        echo "var2 = 'Car' / var7 = '' / ";
        echo "var3 = NULL / ";
        echo "var4<hr>";

        echo "isset(var1) : " . getBooleanText(isset($var1)) . " / " . "isset(var6) : " . getBooleanText(isset($var6)) . "<br/>";
        echo "isset(var2) : " . getBooleanText(isset($var2)) . " / " . "isset(var7) : " . getBooleanText(isset($var7)) . "<br/>";
        echo "isset(var3) : " . getBooleanText(isset($var3)) . "<br/>";
        echo "isset(var4) : " . getBooleanText(isset($var4)) . "<br/>";
        echo "isset(var5) : " . getBooleanText(isset($var5)) . "<hr/>";

        echo "empty(var1) : " . getBooleanText(empty($var1)) . " / " . "empty(var6) : " . getBooleanText(empty($var6)) . "<br/>";
        echo "empty(var2) : " . getBooleanText(empty($var2)) . " / " . "empty(var7) : " . getBooleanText(empty($var7)) . "<br/>";
        echo "empty(var3) : " . getBooleanText(empty($var3)) . "<br/>";
        echo "empty(var4) : " . getBooleanText(empty($var4)) . "<br/>";
        echo "empty(var5) : " . getBooleanText(empty($var5)) . "<hr/>";

        echo "is_null(var1) : " . getBooleanText(is_null($var1)) . " / " . "is_null(var6) : " . getBooleanText(is_null($var6)) . "<br/>";
        echo "is_null(var2) : " . getBooleanText(is_null($var2)) . " / " . "is_null(var7) : " . getBooleanText(is_null($var7)) . "<br/>";
        echo "is_null(var3) : " . getBooleanText(is_null($var3)) . "<br/>";
        echo "is_null(var4) : " . getBooleanText(is_null($var4)) . "<br/>";
        echo "is_null(var5) : " . getBooleanText(is_null($var5)) . "<hr/>";

        ?>
    </div>
    <script src="../myscripts.js?v=1.24"></script>
</body>

</html>
<?php
function getBooleanText($_bool)
{
    return $_bool ? "True" : "False";
}
?>