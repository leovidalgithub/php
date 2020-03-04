<?PHP
$string = '<script>alert("Hello! I am an alert box!");</script>';
echo $string."<br>";
//echo htmlspecialchars($string);

function test_input($data) 
{ 
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data);
return $data; 
}

echo test_input("Hello World")."</br>";
echo "Thanks";
?>