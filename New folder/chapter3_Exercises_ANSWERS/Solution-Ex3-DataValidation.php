<?php
$IncomeErr="";
#Function Definition
function incomeTax($income){
	switch($income){
		case($income <= 41495):
			$tax = ((($income - 0) * 0.16) + 0);
			break;
		case($income <= 82985 && $income > 41495):
			$tax = ((($income - 41495) * 0.20) + 6639.20);
			break;
		case($income > 82985):
			$tax = ((($income - 82985) * 0.24) + 14937.20);
			break;
	}
	return $tax;
}
# Data Validation
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["Income"])) {
			$IncomeErr = "Income is required";
		} else{
			$vIncome = $_POST["Income"];
			$vNetSalary = $vIncome - incomeTax($vIncome);
		}
						
	}
?>   