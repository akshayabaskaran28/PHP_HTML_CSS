<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Travel Booking Confirmation</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $package = $_POST['package'];
    $persons = $_POST['persons'];

    // Package Prices
    switch($package)
    {
        case "Ooty Tour":
            $price = 5000;
            break;

        case "Kodaikanal Tour":
            $price = 6500;
            break;

        case "Goa Tour":
            $price = 12000;
            break;

        case "Kerala Tour":
            $price = 15000;
            break;

        default:
            $price = 0;
    }

    $total = $price * $persons;

    echo "<h3 style='color:green;text-align:center;'>Booking Successful!</h3>";

    echo "<table>";

    echo "<tr><th>Field</th><th>Details</th></tr>";

    echo "<tr><td>Customer Name</td><td>$name</td></tr>";
    echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Travel Package</td><td>$package</td></tr>";
    echo "<tr><td>Number of Persons</td><td>$persons</td></tr>";
    echo "<tr><td>Total Amount</td><td><b>₹ ".number_format($total,2)."</b></td></tr>";

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