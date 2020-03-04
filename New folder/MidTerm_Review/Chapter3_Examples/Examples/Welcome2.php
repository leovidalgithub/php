<html>
<body>
<?PHP
if(!empty($_GET['Username']) AND !empty($_GET['Password']) ){
	$username = $_GET["Username"];
	$password = $_GET['Password'];
	echo "The user <b>$username</b> has password <b>$password</b>" ;
}else{
	
	echo "Input values are empty ...";
}

?>
</body>
</html>