<html>
	<head>	
		<title>Booleans</title>
		<link rel="stylesheet" type="text/css" href="style.css?v=1.21">
	</head>
<body>
	<div class="thisMain">
		<?php
				$bool1 = true;
				$bool2 = false;
				echo "Bool1 = " . $bool1 . "<br>";
				echo "Bool2 = " . $bool2;				
				?><br>

		Constants:<br>
		<?php
			// Assingment to a variable
				$max_width = 970;
			// Assingment to a constant
			//Constants always use capital letters
			define("MAX_WIDTH", 980);
			echo "max_width = " .  $max_width . "<br>";
			echo "MAX_WIDTH = " . MAX_WIDTH;
			echo "<br>"		
		?><hr>
	</div>	
		<script src="myscripts.js?v=1.21"></script>
</body>
</html>
