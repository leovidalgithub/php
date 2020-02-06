<html>
	<head>	
		<title>Variables</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<div class="thisMain">
		<?php	
			$myvar = "Hello my friend<br>";
			$myvar = 123;
			echo $myvar . "<hr>";
	
			$nb1 = 12.66;
			$nb2 = (int) $nb1;
			echo "The integer value of $nb1 is $nb2<hr>";
	
			$nb1 = 12.66;
			$nb2 = (string) $nb1;
			echo "The string value of $nb1 is $nb2<hr>";
			
			$varDec = 2345;
			echo "$varDec  its hexadecial is " . dechex($varDec) . "<hr>";
			echo "$varDec its octal is " . decoct($varDec) . "<hr>";
			echo "$varDec its binary is " . decbin($varDec) . "<hr>";		
			?>
		</div>			
</body>
</html>
