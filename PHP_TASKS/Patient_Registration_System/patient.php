<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration Confirmation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Patient Registration Confirmation</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $gender = trim($_POST['gender']);
    $mobile = trim($_POST['mobile']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);

    if($name=="" || $age=="" || $gender=="" || $mobile=="" || $email=="" || $address=="")
    {
        echo "<h3 style='color:red;'>All fields are mandatory.</h3>";
    }
    else
    {
        echo "<h3 style='color:green;'>Patient Registered Successfully!</h3>";

        echo "<table>";

        echo "<tr><th>Field</th><th>Details</th></tr>";

        echo "<tr><td>Patient Name</td><td>$name</td></tr>";
        echo "<tr><td>Age</td><td>$age</td></tr>";
        echo "<tr><td>Gender</td><td>$gender</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";

        echo "</table>";

        echo "<br><h3 style='color:blue;'>Your registration has been confirmed.</h3>";
    }
}
else
{
    echo "<h3>No data received.</h3>";
}

?>

</div>

</body>
</html>