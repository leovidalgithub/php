<?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<?php
    $errMessage = $income = $annualTaxes = $netSalary = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['annualIncome'])) {
        $income = test_input($_POST["annualIncome"]);
        if (empty($income)) {
            $errMessage = "Income is required!";
        } elseif (!is_numeric($income)) {
            $errMessage = "Income must be numeric!";
        } else {
            $tax = 25.75;
            switch (true) {
                case $income <= 42390:
                $tax = 16;
                break;
            case ($income > 42390 && $income <= 84780):
                $tax = 20;
                break;
            case ($income > 84780 && $income <= 103150):
                $tax = 24;
                break;
            }
            $annualTaxes = ($income * $tax) / 100;
            $netSalary = $income - $annualTaxes;
        }
    }
?>
