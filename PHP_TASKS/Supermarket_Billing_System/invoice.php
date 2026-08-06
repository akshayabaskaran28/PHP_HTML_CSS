<!DOCTYPE html>
<html>
<head>
    <title>Customer Invoice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Customer Invoice</h2>

<?php

$customer=$_POST['customer'];
$product=$_POST['product'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];

$total=$quantity*$price;

// Discount = 10%
$discount=$total*0.10;

// Tax = 5%
$tax=($total-$discount)*0.05;

$final=$total-$discount+$tax;

echo "<table>";

echo "<tr><th>Item</th><th>Details</th></tr>";

echo "<tr><td>Customer Name</td><td>$customer</td></tr>";
echo "<tr><td>Product Name</td><td>$product</td></tr>";
echo "<tr><td>Quantity</td><td>$quantity</td></tr>";
echo "<tr><td>Price per Item</td><td>₹$price</td></tr>";
echo "<tr><td>Total Amount</td><td>₹$total</td></tr>";
echo "<tr><td>Discount (10%)</td><td>₹$discount</td></tr>";
echo "<tr><td>Tax (5%)</td><td>₹$tax</td></tr>";
echo "<tr><th>Final Amount</th><th>₹$final</th></tr>";

echo "</table>";

?>

</div>

</body>
</html>