<html>
<body>
<form action= "#" method="get">
Username: <input type= "text" name= "Username">
Password: <input type= "password" name= "Password">
	      <input type= "Submit">
</form>

<?PHP
	

if(isset($_GET['Username']) AND isset($_GET['Password']) ){
	$username = $_GET["Username"];
	$password = $_GET['Password'];
	
	if(!empty($username) AND !empty($password)){
		echo "The user <b>$username</b> has password <b>$password</b>" ;
	
	}else{
		echo "Input values are empty ...";
	}
}



?>
</body>
</html>