<?php include "includes/header.php" ?>
<?php include "includes/Lab3-Ex3-DataValidation.php" ?>

<body>
    <div id="page" align="center">
        <div id="content" style="width:800px">
            <?php include "includes/logo.php" ?>
            <?php include "includes/headerDiv.php" ?>
            <?php include "includes/menu.php" ?>
            <div id="contenttext">
                <?php include "includes/title.php" ?>
                <div class="bodytext" style="padding:12px;" align="justify">

                    <br /><br />
                    <span class="redAlert">* Required Fields</span>
                    <br /><br />
                    <form class="container" name="theForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div>
                            <label for="annualIncome">*Enter Annual Income:</label>
                            <input id="annualIncome" type="text" name="annualIncome"><br />
                            <span class="redAlert"><?php echo $errMessage ?></span>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="SUBMIT">
                        </div>
                    </form>

                    <?php
                    if (!empty($annualTaxes)) {
                        echo "<strong>---------- After Processing ----------</strong><br><br>";
                        echo "Gross annual Salary is : $" . number_format($income, 2) . "<br>";
                        echo "Your annual Taxes are : $" . number_format($annualTaxes, 2) . "<br>";
                        echo "Your net Salary is : $" . number_format($netSalary, 2) . "<br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>

    </div>
    <script>
        (function(d) {
            if (d.getElementById('annualIncome')) {
                d.getElementById('annualIncome').focus();
            }
        })(document);
    </script>
</body>

</html>