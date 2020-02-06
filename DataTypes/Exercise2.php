<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise 2</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="style.css?v=1.23">
</head>

<body>
	<?php
	$vStatus = true;
	$vAge = 25;
	$vName = "Stewart Laura";
	$vSalary = 27733.5;
	$vArray = array("Volvo", "BMW", "Toyota");
	?>
	<div class="thisMain">
		<h3>Exercise 2</h3>

		<table id="myTable" class="w3-table w3-bordered w3-hoverable">
			<thead>
				<tr>
					<th>Variable</th>
					<th>Scalar</th>
					<th>Int</th>
					<th>Float</th>
					<th>Boolean</th>
					<th>String</th>
					<th>Array</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>vStatus = <?php echo getBooleanText(is_scalar($vStatus)); ?></td>
					<td class="<?php echo getBooleanText(is_scalar($vStatus)); ?>"><?php echo getBooleanText(is_scalar($vStatus)); ?></td>
					<td class="<?php echo getBooleanText(is_int($vStatus)); ?>"><?php echo getBooleanText(is_int($vStatus)); ?></td>
					<td class="<?php echo getBooleanText(is_float($vStatus)); ?>"><?php echo getBooleanText(is_float($vStatus)); ?></td>
					<td class="<?php echo getBooleanText(is_bool($vStatus)); ?>"><?php echo getBooleanText(is_bool($vStatus)); ?></td>
					<td class="<?php echo getBooleanText(is_string($vStatus)); ?>"><?php echo getBooleanText(is_string($vStatus)); ?></td>
					<td class="<?php echo getBooleanText(is_array($vStatus)); ?>"><?php echo getBooleanText(is_array($vStatus)); ?></td>
				</tr>
				<tr>
					<td>vAge = <?php echo $vAge; ?></td>
					<td class="<?php echo getBooleanText(is_scalar($vAge)); ?>"><?php echo getBooleanText(is_scalar($vAge)); ?></td>
					<td class="<?php echo getBooleanText(is_int($vAge)); ?>"><?php echo getBooleanText(is_int($vAge)); ?></td>
					<td class="<?php echo getBooleanText(is_float($vAge)); ?>"><?php echo getBooleanText(is_float($vAge)); ?></td>
					<td class="<?php echo getBooleanText(is_bool($vAge)); ?>"><?php echo getBooleanText(is_bool($vAge)); ?></td>
					<td class="<?php echo getBooleanText(is_string($vAge)); ?>"><?php echo getBooleanText(is_string($vAge)); ?></td>
					<td class="<?php echo getBooleanText(is_array($vAge)); ?>"><?php echo getBooleanText(is_array($vAge)); ?></td>
				</tr>
				<tr>
					<td>vName = <?php echo $vName; ?></td>
					<td class="<?php echo getBooleanText(is_scalar($vName)); ?>"><?php echo getBooleanText(is_scalar($vName)); ?></td>
					<td class="<?php echo getBooleanText(is_int($vName)); ?>"><?php echo getBooleanText(is_int($vName)); ?></td>
					<td class="<?php echo getBooleanText(is_float($vName)); ?>"><?php echo getBooleanText(is_float($vName)); ?></td>
					<td class="<?php echo getBooleanText(is_bool($vName)); ?>"><?php echo getBooleanText(is_bool($vName)); ?></td>
					<td class="<?php echo getBooleanText(is_string($vName)); ?>"><?php echo getBooleanText(is_string($vName)); ?></td>
					<td class="<?php echo getBooleanText(is_array($vName)); ?>"><?php echo getBooleanText(is_array($vName)); ?></td>
				</tr>
				<tr>
					<td>vSalary = <?php echo number_format($vSalary, 2); ?></td>
					<td class="<?php echo getBooleanText(is_scalar($vSalary)); ?>"><?php echo getBooleanText(is_scalar($vSalary)); ?></td>
					<td class="<?php echo getBooleanText(is_int($vSalary)); ?>"><?php echo getBooleanText(is_int($vSalary)); ?></td>
					<td class="<?php echo getBooleanText(is_float($vSalary)); ?>"><?php echo getBooleanText(is_float($vSalary)); ?></td>
					<td class="<?php echo getBooleanText(is_bool($vSalary)); ?>"><?php echo getBooleanText(is_bool($vSalary)); ?></td>
					<td class="<?php echo getBooleanText(is_string($vSalary)); ?>"><?php echo getBooleanText(is_string($vSalary)); ?></td>
					<td class="<?php echo getBooleanText(is_array($vSalary)); ?>"><?php echo getBooleanText(is_array($vSalary)); ?></td>
				</tr>
				<tr>
					<td>vArray = <?php echo $vArray[0] . "-" . $vArray[1] . "-" . $vArray[2]; ?></td>
					<td class="<?php echo getBooleanText(is_scalar($vArray)); ?>"><?php echo getBooleanText(is_scalar($vArray)); ?></td>
					<td class="<?php echo getBooleanText(is_int($vArray)); ?>"><?php echo getBooleanText(is_int($vArray)); ?></td>
					<td class="<?php echo getBooleanText(is_float($vArray)); ?>"><?php echo getBooleanText(is_float($vArray)); ?></td>
					<td class="<?php echo getBooleanText(is_bool($vArray)); ?>"><?php echo getBooleanText(is_bool($vArray)); ?></td>
					<td class="<?php echo getBooleanText(is_string($vArray)); ?>"><?php echo getBooleanText(is_string($vArray)); ?></td>
					<td class="<?php echo getBooleanText(is_array($vArray)); ?>"><?php echo getBooleanText(is_array($vArray)); ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<script src="myscripts.js?v=1.21"></script>
</body>

</html>
<?php
function getBooleanText($_bool)
{
	return $_bool ? "True" : "False";
}
?>