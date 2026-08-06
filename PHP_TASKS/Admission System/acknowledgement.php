<!DOCTYPE html>
<html>
<head>
<title>Admission Acknowledgement</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Admission Acknowledgement</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "<table border='1' cellpadding='10' cellspacing='0'>";

    echo "<tr><th>Field</th><th>Details</th></tr>";

    echo "<tr><td>Name</td><td>".$_POST['name']."</td></tr>";
    echo "<tr><td>Date of Birth</td><td>".$_POST['dob']."</td></tr>";
    echo "<tr><td>Gender</td><td>".$_POST['gender']."</td></tr>";
    echo "<tr><td>Email</td><td>".$_POST['email']."</td></tr>";
    echo "<tr><td>Mobile</td><td>".$_POST['mobile']."</td></tr>";
    echo "<tr><td>Course</td><td>".$_POST['course']."</td></tr>";
    echo "<tr><td>Address</td><td>".$_POST['address']."</td></tr>";

    echo "</table>";

    echo "<br><h3 style='color:green;'>Your admission application has been submitted successfully.</h3>";
}
else
{
    echo "<h3>No data received.</h3>";
}

?>

</div>

</body>
</html>