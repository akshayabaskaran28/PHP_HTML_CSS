<!DOCTYPE html>
<html>
<head>
<title>Registration Success</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>ABC Shopping Mart</h1>
<p>Customer Registration Details</p>
</header>

<div class="container">

<?php

$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$address=$_POST['address'];

if(empty($name)||empty($id)||empty($email)||empty($mobile)||empty($city)||empty($address))
{
    echo "<h2 style='color:red;'>All fields are mandatory!</h2>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "<h2 style='color:red;'>Invalid Email Address!</h2>";
}
elseif(!preg_match("/^[0-9]{10}$/",$mobile))
{
    echo "<h2 style='color:red;'>Mobile Number must contain exactly 10 digits!</h2>";
}
else
{
echo "<h2>Registration Successful</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Information</th></tr>";

echo "<tr><td>Customer Name</td><td>$name</td></tr>";
echo "<tr><td>Customer ID</td><td>$id</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Mobile</td><td>$mobile</td></tr>";
echo "<tr><td>City</td><td>$city</td></tr>";
echo "<tr><td>Address</td><td>$address</td></tr>";

echo "</table>";

echo "<br><h3 style='color:green;text-align:center;'>Customer Registered Successfully!</h3>";
}

?>

</div>

<footer>
© 2026 ABC Shopping Mart | Customer Registration System
</footer>

</body>
</html>