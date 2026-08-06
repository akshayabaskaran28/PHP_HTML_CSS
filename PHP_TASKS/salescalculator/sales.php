<!DOCTYPE html>
<html>
<head>
    <title>Sales Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Sales Details</h2>

<?php

function calculateSales($qty, $price)
{
    return $qty * $price;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $total = calculateSales($quantity, $price);

    echo "<table>";

    echo "<tr><th>Field</th><th>Details</th></tr>";

    echo "<tr><td>Product Name</td><td>$product</td></tr>";
    echo "<tr><td>Quantity</td><td>$quantity</td></tr>";
    echo "<tr><td>Price per Product</td><td>₹$price</td></tr>";
    echo "<tr><td>Total Sales Value</td><td><b>₹$total</b></td></tr>";

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