<?php include "includes/functions.php"?>

<?php include "includes/header.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<div id="contenttext">
				<?php include "includes/title.php"?>
					<div class="bodytext" style="padding:12px;" align="justify">
					
					<strong><br /><br />
					<font color=#CC0000>* Required Fields</font>
					</strong><br /><br />
					<?php 
					//-----------------Variables Declaration---------------
					$weightError = "";
					$heightError = "";
					
					$weightInput = "";
					$heightInput = "";
					
					$selectInput = 0;
					//-----------------Variables Validation--------------- 	
					
					if(isset($_POST['submit'])){
						if(empty($_POST['weight'])){
							$weightError = "Error: weight is required !";
						}else{
							$weightInput = $_POST['weight'];
						}
						if(empty($_POST['height'])){
							$heightError = "Error: height is required !";
						}else{
							$heightInput =$_POST['height'];
						}
						$selectInput  = $_POST['unit'];
					}
					?>
					<form  action="#" method="POST"> 
						Weight: <input type="number" name="weight" value= "<?php echo $weightInput; ?>" placeholder="Enter your weight" size="12">
						        <select name="unit" style= "font-size:10pt; font-weight:bold; color:blue">
								<option value='0' <?php if($selectInput == 0){echo "selected";} ?>>Kg</option>
								<option value='1' <?php if($selectInput == 1){echo "selected";} ?>>Lbs</option>
								</select>
								<strong><font color=#CC0000>*<?php echo $weightError;?>
								</font></strong>
					    <br /><br />
						Height: <input type="number" name="height" value = "<?php echo $heightInput;?>" placeholder="Enter your height in Centimeters" size="20">
						<strong><font color= 'blue'>Cm</font></strong>
						<strong><font color=#CC0000>*<?php echo $heightError;?></font></strong>
						<br /><br />
						<input type="submit" name="submit" value="Calculate BMI" style="font-size:13pt; font-weight:bold; color:white; background-color: #CC0000;">
					</form>
					<br /><br />
					<?php
					//-----------------Results--------------------
						if(isset($_POST['submit']) && !empty($_POST['weight']) && !empty($_POST['height'])){
							echo "<strong><font color=#CC0000>";
							echo "Your BMI = ".CalculateBMI($weightInput , $heightInput , $selectInput);
							echo "</font></strong>";
						}
						
					?>
				</div>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
</body>
</html>