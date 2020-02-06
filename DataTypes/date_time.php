<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>date_time</title>
    <link rel="stylesheet" href="../style.css?v=1.24">
</head>

<body>
    <div class="thisMain">
        <h3><span>date & time</span></h3>

        <?php
            date_default_timezone_set('UTC');
            // date_default_timezone_set('America/Montreal');
            $v_date = date('l jS \of F Y h:i:s A');
            echo "Current Date and Time is : $v_date<br/>";
            echo "It is " . date('g:i A') . "<br/>";
            if (date('H') < 10) {
                echo "Have a Good Day!";
            } elseif (date('H') < 19) {
                echo "Good Evening!";
            } else {
                echo "Have a Good Night!";
            }
            echo "<hr>";
        ?>
    </div>
    <script src="../myscripts.js?v=1.24"></script>
</body>

</html>
<?php
?>