<!DOCTYPE html>
<html>
<head>
    <title>BMI Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>BMI Result</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $bmi = $weight / ($height * $height);

    if($bmi < 18.5)
    {
        $status = "Underweight";
        $recommendation = "Increase your calorie intake and maintain a balanced diet.";
    }
    elseif($bmi < 25)
    {
        $status = "Normal Weight";
        $recommendation = "Maintain your healthy lifestyle with regular exercise.";
    }
    elseif($bmi < 30)
    {
        $status = "Overweight";
        $recommendation = "Exercise regularly and reduce high-calorie foods.";
    }
    else
    {
        $status = "Obese";
        $recommendation = "Consult a healthcare professional and follow a healthy diet plan.";
    }

    echo "<table>";

    echo "<tr><th>Field</th><th>Details</th></tr>";

    echo "<tr><td>Name</td><td>$name</td></tr>";
    echo "<tr><td>Height</td><td>$height m</td></tr>";
    echo "<tr><td>Weight</td><td>$weight kg</td></tr>";
    echo "<tr><td>BMI</td><td>".number_format($bmi,2)."</td></tr>";
    echo "<tr><td>Health Status</td><td>$status</td></tr>";
    echo "<tr><td>Recommendation</td><td>$recommendation</td></tr>";

    echo "</table>";
}
else
{
    echo "<h3>No data received.</h3>";
}

?>

</div>

</body>
</html>