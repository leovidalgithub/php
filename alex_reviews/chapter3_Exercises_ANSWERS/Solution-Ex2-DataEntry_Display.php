<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$student_FirstName = 'Alex';
$student_LastName = 'Vilvert';
$chapter = 3;
$lab = 2;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>PHP Demo</title>
</head>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo">
				<div style="margin-top:70px" class="whitetitle"><?php echo $student_FirstName; ?></div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<strong>Student Name:<?php echo " ".$student_FirstName." ".$student_LastName; ?> </strong><br />
					Course: 420-M14-AS<br />
					Teacher: Salima Hassaine<br />
					Semester: Winter 2016<br />
				</div>
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					<span class="titletext"><?php echo "Chapter ".$chapter." - Lab practice ".$lab; ?></span>
				</div>
					<div class="bodytext" style="padding:14px;" align="justify">
					<strong>
						<form action="#" method="get">
						EmployeeId : <input type="text" name="EmpId" size="10"/><br/><br/>
						First  Name  : <input type="text" name="FName"size="20"/><br/><br/>
                        Last  Name  : <input type="text" name="LName"size="20"/><br/><br/>
				        Gross Salary : <input type="text" name="Salary"size="10"/><br/><br/>
						<input type="submit" name="submit" value="Submit"/><br/>
					</form>
					</strong><br />
					</div>
					
<div class="bodytext" style="padding:14px;" align="justify">
<strong>
<?php
	
##echo "Employee ID: ".$_GET["EmpId"]."<br/>";
	if (isset($_GET["EmpId"])){ #try it with empty()  
                echo "Employee ID: ".$_GET["EmpId"]."<br/>";
    }
    if (isset($_GET["FName"]) AND isset($_GET["LName"]) ){
echo "Employee Name: ".$_GET["FName"]."  ".$_GET["LName"]."<br/>";
	}
  if (isset($_GET["Salary"])){
		echo "Salary: ".$_GET["Salary"]."<br/>";
	}
##}
?>   
					</strong><br />
				</div>
			</div>
			
			<div id="footer" class="smallgraytext">
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Contact Us</a>
			</div>
		</div>
	</div>
</body>
</html>