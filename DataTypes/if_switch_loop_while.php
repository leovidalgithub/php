<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if_switch_loop_while</title>
    <link rel="stylesheet" href="style.css?v=1.24">
</head>

<body>
    <div class="thisMain">
        <h3><span>if_switch_loop_while</span></h3>

        <?php
        echo "<span>switch</span><br/>";
        $size = "S";
        switch ($size) {
            case "S":
                echo "Your size is small !";
                break;
            case "M":
                echo "Your size is medium !";
                break;
            case "L":
                echo "Your size is large !";
                break;
            default:
                echo "Your size is undefined!";
        }
        echo "<hr>";
        ?>
        <?php
        echo "<span>while -</span><br/>";
        $x = 1;
        while ($x <= 5) {
            echo "The number is: $x <br />";
            $x++;
        }
        echo "<hr>";
        ?>
        <?php
        echo "<span>do - while</span><br/>";
            $x = 1;
            do {
                echo "The number is: $x <br />";
                $x++;
            } while ($x <= 5);
            echo "<hr>";
        ?>
        <?php
        echo "<span>for - loop</span><br/>";
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br />";
        }
        echo "<hr>";
        ?>
        <?php
        echo "<span>foreach - array</span><br/>";
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value) {
            echo "$value <br />";
        }
        echo "<hr>";
        ?>
    </div>
    <script src="myscripts.js?v=1.24"></script>
</body>

</html>
<?php
?>