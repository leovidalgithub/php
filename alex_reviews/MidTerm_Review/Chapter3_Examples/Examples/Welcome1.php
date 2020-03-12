<html>
<body>
<?PHP
if(!empty($_POST['Username']) AND !empty($_POST['Password']) ){
	$username = $_POST["Username"];
	$password = $_POST['Password'];
	echo "The user <b>$username</b> has password <b>$password</b>" ;
}else{
	
	echo "Input values are empty ...";
}

?>
</body>
</html>