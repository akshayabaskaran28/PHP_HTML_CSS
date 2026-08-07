<!DOCTYPE html>
<html>
<head>
<title>Employee Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php

$name=$_POST['name'];
$id=$_POST['id'];
$department=$_POST['department'];
$designation=$_POST['designation'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

if(empty($name)||empty($id)||empty($department)||empty($designation)||empty($email)||empty($mobile))
{
    echo "<h3 style='color:red;'>All fields are required.</h3>";
}
else
{
echo "<h2>Employee Profile</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Information</th></tr>";

echo "<tr><td>Name</td><td>$name</td></tr>";
echo "<tr><td>Employee ID</td><td>$id</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Designation</td><td>$designation</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Mobile</td><td>$mobile</td></tr>";

echo "</table>";

echo "<h3 style='color:green;text-align:center;'>Employee Information Submitted Successfully!</h3>";
}

?>

</div>

</body>
</html>