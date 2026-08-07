<!DOCTYPE html>
<html>
<head>
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $customerid = $_POST['customerid'];
    $password = $_POST['password'];

    // Sample Login Credentials
    $validCustomer = "CUST1001";
    $validPassword = "bank@123";

    if($customerid == $validCustomer && $password == $validPassword)
    {
        echo "<h2 style='color:green;'>Login Successful</h2>";

        echo "<table>";

        echo "<tr><th>Customer Details</th><th>Information</th></tr>";

        echo "<tr><td>Customer Name</td><td>Akshaya B</td></tr>";
        echo "<tr><td>Customer ID</td><td>$customerid</td></tr>";
        echo "<tr><td>Account Number</td><td>123456789012</td></tr>";
        echo "<tr><td>Account Type</td><td>Savings</td></tr>";
        echo "<tr><td>Branch</td><td>Coimbatore</td></tr>";
        echo "<tr><td>Available Balance</td><td>₹75,000</td></tr>";

        echo "</table>";
    }
    else
    {
        echo "<h2 style='color:red;'>Invalid Customer ID or Password</h2>";
    }
}
else
{
    echo "<h2>No data received.</h2>";
}

?>

</div>

</body>
</html>