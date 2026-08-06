<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Submitted Student Details</h2>

<?php

$name=$_POST['name'];
$regno=$_POST['regno'];
$department=$_POST['department'];
$year=$_POST['year'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

echo "<table>";

echo "<tr><th>Field</th><th>Information</th></tr>";

echo "<tr><td>Student Name</td><td>$name</td></tr>";
echo "<tr><td>Register Number</td><td>$regno</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Year</td><td>$year</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";

echo "</table>";

?>

</div>

</body>
</html>