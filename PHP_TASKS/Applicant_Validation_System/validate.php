<!DOCTYPE html>
<html>
<head>
    <title>Validation Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Applicant Validation Result</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $mobile = trim($_POST['mobile']);

    // Email Validation
    if(filter_var($email, FILTER_VALIDATE_EMAIL))
        $emailStatus = "Valid Email";
    else
        $emailStatus = "Invalid Email";

    // Password Validation
    if(strlen($password) >= 8)
        $passwordStatus = "Valid Password";
    else
        $passwordStatus = "Password must contain at least 8 characters";

    // Mobile Validation
    if(preg_match("/^[0-9]{10}$/", $mobile))
        $mobileStatus = "Valid Mobile Number";
    else
        $mobileStatus = "Invalid Mobile Number";

    echo "<table>";

    echo "<tr><th>Validation</th><th>Status</th></tr>";

    echo "<tr><td>Email</td><td>$emailStatus</td></tr>";
    echo "<tr><td>Password</td><td>$passwordStatus</td></tr>";
    echo "<tr><td>Mobile Number</td><td>$mobileStatus</td></tr>";

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