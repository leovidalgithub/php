<?php 
function convertToMeters($value) { // convert Centimeters into Meters
    return $value / 100;
}
function convertToInches($value) { // convert Centimeters into Inches
    return $value / 2.54;
}

function calculateBMI($weight, $height, $metric) {
    $BMI = 0;
    switch ($metric) {
        case 1: // Kg
            $BMI = $weight / pow(convertToMeters($height), 2);
            break;
        default: // Pounds
            $BMI = ($weight / pow(convertToInches($height), 2)) * 703.06957964;
            break;
    }
    return $BMI;
}

function getCategory($BMI) {
    switch (true) {
        case $BMI < 18.5:
            return 1;
            break;
        case ($BMI >= 18.5 && $BMI < 24.9):
            return 2;
            break;
        case ($BMI >= 25 && $BMI < 29.9):
            return 3;
            break;
        case ($BMI >= 30):
            return 4;
            break;
    }
}

function getDetails($BMI, $cat) {
    switch ($cat) {
        case 1:
            $desc = "Underweight";
            $risk = "You are more likely to get sick and develop infections, like respiratory problems. Being underweight can decrease the body's ability to absorb essential nutrients, such as vitamins, and minerals. Improper absorption of vitamin D and calcium increases the risk of developing osteoporosis, while abnormal iron absorption an lead to iron-deficiency anemia";
            $advice = "You may need to gain weight";
            break;
        case 2:
            $desc = "Healthy weight";
            $risk = "You have very low risk factors for diseases";
            $advice = "You have to keep your healthy weight";
            break;
        case 3:
            $desc = "Overweight";
            $risk = "You have fewer than two risk factors for certain diseases, such as heart disease, high blood pressure, type 2 diabetes, gallstones, breathing problems, and certain cancers";
            $advice = "You may neeed to prevent further weight gain rather than lose weight";
            break;
        default:
            $desc = "Obese";
            $risk = "You have two or more risk factors for certain diseases, such as heart disease, high blood pressure, type 2 diabetes, gallstones, breathing problems, and certain cancers";
            $advice = "You may neeed to lose weight";
            break;
    }

        $details = array(
            array('text' => 'Your BMI:', 'details' => $BMI, 'image' => 'bmi.png'),
            array('text' => 'Description:', 'details' => $desc, 'image' => 'gauge.jpg'),
            array('text' => 'Risk:', 'details' => $risk, 'image' => 'risk.jpg'),
            array('text' => 'Advice:', 'details' => $advice, 'image' => 'advice.png')
        );
    return $details;
}

    function getDisplay($array) {
        $result = "";
        foreach ($array as $x => $x_value) {
            $result .= '<div class="media bmiexercise">
                        <div class="media-left media-middle">
                            <img class="media-object img-thumbnail" width="150" src="./images/' . $x_value["image"] . '" alt="">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">' . $x_value["text"] . '</h4>';
                            if (is_numeric($x_value["details"])) {
                                $result .= '<p class="bmivalue">' . number_format($x_value["details"], 2) . '</p>';
                            } else {
                                $result .= '<p>' . $x_value["details"] . '</p>';
                            }
                        $result .= '</div></div>';
        }
        return $result;
    }
?>