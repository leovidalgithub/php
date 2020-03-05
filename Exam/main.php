<?php include "includes/header.php" ?>
<?php include "./includes/validation.php" ?>

<body>
    <div id="page" align="center">
        <div id="content" style="width:800px">
            <?php include "includes/logo.php" ?>
            <?php include "includes/headerDiv.php" ?>
            <?php include "includes/menu.php" ?>
            <div id="contenttext">
                <?php include "includes/title.php" ?>
                <div class="bodytext" style="padding:12px;" align="justify">

                    <strong><br /><br />
                        <font color=#CC0000>* Required Fields</font>
                    </strong><br /><br />

                    <form class="container" name="BMI_FORM" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div>
                            <h5 class="redAlert"><?php echo $errMessage ?></h5>
                            <div>
                                <label for="inputWeight"> *Weight:</label>
                                <input id="inputWeight" type="text" name="inputWeight" placeholder="Enter your Weight" value="<?php echo $inputWeight; ?>"> >>
                                <select style="font-size: 1.2rem;" id="weightMetric" name="weightMetric">
                                    <option value="1" <?php if ($weightSelected == 1) echo "selected" ?>>Kg</option>
                                    <option value="2" <?php if ($weightSelected == 2) echo "selected" ?>>Lbs</option>
                                </select>
                            </div>
                            <label for="inputHeight">* Height:</label>
                            <input id="inputHeight" type="text" name="inputHeight" placeholder="Enter Height in Centimeters" value="<?php echo $inputHeight; ?>"><br />
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Calculate BMI">
                        </div>
                    </form>

                    <?php
                    if (!empty($result)) {
                        echo '<h3 class="result">Here your Result</h3>';
                        echo $result;
                    }
                    ?>
                </div>
            </div>
            <?php include "includes/footer.php" ?>
        </div>
    </div>
    <script>
        (function(d) {
            if (d.getElementById('inputWeight')) {
                d.getElementById('inputWeight').focus();
            }
        })(document);
    </script>
</body>

</html>