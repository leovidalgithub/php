<html>
	<head>	
		<title>Exercise 1</title>
		<link rel="stylesheet" type="text/css" href="style.css?v=1.21">
	</head>
<body>
<?php 
	$name = "Stewart Laura";
	$company = "Media Inc.";	
	$anual_gross_salary = 45000;
	$fed_tax = 18.37;
	$pro_tax = 20;
	$total_tax = (($anual_gross_salary * $fed_tax) / 100) + (($anual_gross_salary * $pro_tax) / 100);
	$net_salary = $anual_gross_salary - $total_tax;	
?>
	<div class="thisMain">
		<h3>Exercise 1</h3>
		<?php 
				echo "Employee $name is working in $company<br>
							Her gross salary is $" . number_format($anual_gross_salary, 2) . " 
							and annual tax is $" . number_format($total_tax, 2) . ",<br>
							her net pay is $" . number_format($net_salary, 2) . "<br><br>";
				echo "<hr><br>Long Live Socialism!";
		?>
	</div>	
		<script src="myscripts.js?v=1.21"></script>
</body>
</html>
