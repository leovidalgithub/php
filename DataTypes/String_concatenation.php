<html>
	<head>	
		<title>Variables</title>
		<link rel="stylesheet" type="text/css" href="style.css?v=1.21">
	</head>
<body>
	<div class="thisMain">
		<?php	
			$string1 = "The quick brown fox";
			$string2 = " jumped to the river";
			$string3 = "!<hr>";
			$string4 = $string1 . $string2;
			$string4 .= $string3;
			echo $string4;
		?>		
		<span>Lowercase:</span> <?php echo strtolower($string4);?>
		<span>Uppercase:</span> <?php echo strtoupper($string4);?>
		<span>Length:</span> <?php echo strlen($string4); ?><hr>
		<span>Find:</span> <?php echo strstr($string4, "quick"); ?>
		<span>Trim:</span> <?php echo $string5 = $string1 . trim($string2); ?><hr>
		<span>Replace:</span> <?php echo str_replace("brown", "white", $string4); ?>

	</div>	
		<script src="myscripts.js?v=1.21"></script>
</body>
</html>
