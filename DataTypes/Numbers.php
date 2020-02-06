<html>
	<head>	
		<title>Variables</title>
		<link rel="stylesheet" type="text/css" href="../style.css?v=1.21">
	</head>
<body>
	<div class="thisMain">
		<?php			
			$var1 = 3;
			$var2 = 4;
			$myFloat = 3.14;
		?>
		Basic Math uses on PHP:
		<?php 
			echo ((1+2+$var1) * $var2) / 2 - 5;
		?><hr>
		Math Operations: <br>
		+= <?php $var2 += 4; 	echo $var2;?><br>
		-= <?php $var2 -= 4; 	echo $var2;?><br>
		*= <?php $var2 *= 4; 	echo $var2;?><br>
		/= <?php $var2 /= 4; 	echo $var2;?><br>
		Increment   =<?php $var2 ++; 	echo $var2;?><br>
		Decrement =<?php $var2 --; 	echo $var2;?><hr>

		Float and Points:<br>
		Floating <?php echo $myFloat;?><br>  
		Round <?php echo round($myFloat,1);?><br>
		Ceiling <?php echo ceil($myFloat);?><br>
		Floor <?php echo floor($myFloat);?><hr>
	</div>	
		<script src="../myscripts.js?v=1.21"></script>
</body>
</html>
