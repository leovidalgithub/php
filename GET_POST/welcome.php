<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $method = "POST";
    } elseif (isset($_GET['name'])) {
        $method = "GET";
        $name = $_GET['name'];
        $email = $_GET['email'];
    }
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
                <?php
                    echo "<span>Method</span> " . $method . "<br/>";
                    echo "<span>Welcome</span> " . $name . "<br/>";
                    echo "<span>Your Email</span> " . $email . "<hr/>";
                ?>
            </div>
            <script src="myscripts.js?v=1.24"></script>
        </body>

        </html>