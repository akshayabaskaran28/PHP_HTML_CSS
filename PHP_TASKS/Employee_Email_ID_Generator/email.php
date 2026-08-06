<!DOCTYPE html>
<html>
<head>
    <title>Employee Email Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Employee Email Details</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $department = $_POST['department'];

    $email = strtolower($fname).".".strtolower($lname)."@company.com";

    echo "<table>";

    echo "<tr><th>Field</th><th>Details</th></tr>";
    echo "<tr><td>First Name</td><td>$fname</td></tr>";
    echo "<tr><td>Last Name</td><td>$lname</td></tr>";
    echo "<tr><td>Department</td><td>$department</td></tr>";
    echo "<tr><td>Email ID</td><td>$email</td></tr>";

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