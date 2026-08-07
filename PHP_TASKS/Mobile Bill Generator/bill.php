<!DOCTYPE html>
<html>
<head>
    <title>Mobile Bill Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Mobile Bill Summary</h2>

<?php

function calculateBill($plan,$minutes)
{
    switch($plan)
    {
        case "Basic":
            $monthly = 199;
            $rate = 1.50;
            break;

        case "Standard":
            $monthly = 399;
            $rate = 1.00;
            break;

        case "Premium":
            $monthly = 699;
            $rate = 0.75;
            break;

        default:
            $monthly = 0;
            $rate = 0;
    }

    return $monthly + ($minutes * $rate);
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $plan = $_POST['plan'];
    $minutes = $_POST['minutes'];

    $bill = calculateBill($plan,$minutes);

    echo "<table>";

    echo "<tr><th>Field</th><th>Details</th></tr>";

    echo "<tr><td>Customer Name</td><td>$name</td></tr>";
    echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
    echo "<tr><td>Tariff Plan</td><td>$plan</td></tr>";
    echo "<tr><td>Extra Minutes</td><td>$minutes</td></tr>";
    echo "<tr><td><b>Total Bill</b></td><td><b>₹ ".number_format($bill,2)."</b></td></tr>";

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