<?php 
    session_start();

    $mysqli = new mysqli('localhost', 'root', '', 'userregistration');
    if ($mysqli->connect_errno) {
        printf('Connect failed: %s\n', mysqli_connect_error());
        exit();
    }

    $name = stripslashes($_POST['username']);
    $pass = stripslashes($_POST['password']);

    if ($result = $mysqli->query("SELECT * FROM usertable WHERE name = '$name' AND password = '$pass';")) {

        if ($result->num_rows) {
            $_SESSION['username'] = $name;
            $_SESSION['password'] = $pass;
            session_name($name);
            header('location:home.php');
            exit();
        }
    } else {
        echo '<h1>error</h1>';
        echo ('Error description: ' . $mysqli->error);
        exit();
    }

header('location:login.php');
$result->close();
$mysqli->close();

/*
    // $conn = mysqli_connect('localhost','root','');
    // mysqli_select_db($conn, 'userregistration');

    $query = "SELECT * FROM usertable WHERE name = '$name' AND password = '$pass';";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;
        session_name($name);
        header('location:home.php');
    } else {
        header('location:login.php');
    }
*/
?>