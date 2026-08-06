<!DOCTYPE html>
<html>
<head>
    <title>Course Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Course Registration Details</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = trim($_POST['name']);
    $regno = trim($_POST['regno']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $course = trim($_POST['course']);

    // Validation
    if($name=="" || $regno=="" || $email=="" || $mobile=="" || $course=="")
    {
        echo "<h3 style='color:red;'>All fields are required.</h3>";
    }
    else
    {
        echo "<h3 style='color:green;'>Registration Successful!</h3>";

        echo "<table>";

        echo "<tr><th>Field</th><th>Details</th></tr>";

        echo "<tr><td>Student Name</td><td>$name</td></tr>";
        echo "<tr><td>Register Number</td><td>$regno</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Selected Course</td><td>$course</td></tr>";

        echo "</table>";
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