<?php 
    session_start();

    header('location:login.php');

    $conn = mysqli_connect('localhost','root','');

    mysqli_select_db($conn, 'userregistration');

    $name = $_POST['username'];
    $pass = $_POST['password'];

    $name = stripslashes($name);
    $pass = stripslashes($pass);

    // $name = mysql_real_escape_string($name);
    // $pass = mysql_real_escape_string($pass);

    $query = "SELECT * FROM usertable WHERE name = '$name;'";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        echo 'Oops! Username already taken!';
    } else {
        $query_req = "INSERT INTO usertable VALUES ('$name','$pass');";
        mysqli_query($conn, $query_req);
        echo 'Registration DONE successfully!';
    }
?>