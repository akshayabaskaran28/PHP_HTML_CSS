<!DOCTYPE html>
<html>
<head>
    <title>Library Membership Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Membership Registration Result</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $memberid = trim($_POST['memberid']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $type = trim($_POST['type']);

    // Validation
    if($name=="" || $memberid=="" || $email=="" || $mobile=="" || $type=="")
    {
        echo "<h3 style='color:red;'>All fields are required.</h3>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "<h3 style='color:red;'>Invalid Email Address.</h3>";
    }
    elseif(!preg_match("/^[0-9]{10}$/", $mobile))
    {
        echo "<h3 style='color:red;'>Mobile Number must contain exactly 10 digits.</h3>";
    }
    else
    {
        echo "<h3 style='color:green;text-align:center;'>Membership Registered Successfully!</h3>";

        echo "<table>";

        echo "<tr><th>Field</th><th>Information</th></tr>";

        echo "<tr><td>Member Name</td><td>$name</td></tr>";
        echo "<tr><td>Membership ID</td><td>$memberid</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Membership Type</td><td>$type</td></tr>";

        echo "</table>";

        echo "<br><h3 style='color:blue;text-align:center;'>Welcome to the Library!</h3>";
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