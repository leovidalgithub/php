<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
} else {
    $name = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" type="text/css" />
    <title>Home</title>
</head>

<body>

    <div class="container">
        <h2>Welcome Home <?php echo $name; ?></h2>
        <a href="logout.php" class="float-right">LOGOUT</a>
    </div>

</body>

</html>