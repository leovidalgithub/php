<strong><br /><br />
    <font color=#CC0000>* Required Fields</font>
</strong><br /><br />
<form class="container" name="theForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div>
        <label for="empid">*Employee Id:</label>
        <input id="empid" type="text" name="employeeId"><br />
    </div>
    <div>
        <label for="fname">*First Name:</label>
        <input id="fname" type="text" name="firstName"><br />
    </div>
    <div>
        <label for="lname">Last Name:</label>
        <input id="lname" type="text" name="lastName"><br />
    </div>
    <div>
        <label for="grosssalary">*Gross Salary:</label>
        <input id="grosssalary" type="text" name="grossSalary"><br />
    </div>
    <div>
        <input type="submit" name="submit" value="SUBMIT">
    </div>
</form>