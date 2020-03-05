<?php include "functions.php" ?>
<?php
    $weightSelected = 1;
    $inputWeight = "";
    $inputHeight = "";
    $errMessage = $details = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (
            (empty($_POST['inputWeight']) || empty($_POST['inputHeight']))
            || (!is_numeric($_POST['inputWeight']) || !is_numeric($_POST['inputHeight']))            
            ) {
            $errMessage = "Please, enter numeric values for Weight and Height!";
        } else {
            $inputWeight = $_POST['inputWeight'];
            $inputHeight = $_POST['inputHeight'];
            $weightSelected = $_POST['weightMetric'];

            $BMI = calculateBMI($inputWeight, $inputHeight, $weightSelected);
            $cat = getCategory($BMI);
            $details = getDetails($BMI, $cat);
            $result = getDisplay($details);
    }
}
?>
