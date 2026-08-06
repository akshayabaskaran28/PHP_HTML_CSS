<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Electricity Bill Details</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $consumer = $_POST['consumer'];
    $units = $_POST['units'];

    // Slab Rate Calculation
    if($units <= 100)
    {
        $bill = $units * 1.50;
    }
    elseif($units <= 200)
    {
        $bill = (100 * 1.50) + (($units - 100) * 2.50);
    }
    elseif($units <= 300)
    {
        $bill = (100 * 1.50) + (100 * 2.50) + (($units - 200) * 4.00);
    }
    else
    {
        $bill = (100 * 1.50) + (100 * 2.50) + (100 * 4.00) + (($units - 300) * 6.00);
    }

    echo "<table>";

    echo "<tr><th>Field</th><th>Details</th></tr>";

    echo "<tr><td>Consumer Name</td><td>$name</td></tr>";
    echo "<tr><td>Consumer Number</td><td>$consumer</td></tr>";
    echo "<tr><td>Units Consumed</td><td>$units Units</td></tr>";
    echo "<tr><td>Total Bill Amount</td><td>₹ ".number_format($bill,2)."</td></tr>";

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