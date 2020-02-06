<?php
    if(empty($_POST['employeeId']) 
       or empty($_POST['firstName']) 
       or empty($_POST['grossSalary']) ) {
        echo "<strong>Oops! Some info is missing here.</strong><br><br>
            Go back and try again.<br><br>";
    } else {
        echo "<strong>---------- After Processing ----------</strong><br><br>
        Employee Id: " . $_POST['employeeId'] . "<br><br>
        First Name: " . $_POST['firstName'] . "<br><br>
        Last Name: " . $_POST['lastName'] . "<br><br>
        Gross Salary: $" . number_format($_POST['grossSalary'], 2) . "<br><br>";
    }
    echo "<input id='gobackbutton' type='button' value='Go back'>";
?>