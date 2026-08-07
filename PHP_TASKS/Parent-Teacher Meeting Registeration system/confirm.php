<!DOCTYPE html>
<html>
<head>
<title>Meeting Confirmation</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>ABC Public School</h1>
<p>Appointment Confirmation</p>
</header>

<div class="container">

<?php

$parent=$_POST['parent'];
$student=$_POST['student'];
$class=$_POST['class'];
$teacher=$_POST['teacher'];
$date=$_POST['date'];
$slot=$_POST['slot'];

if(empty($parent)||empty($student)||empty($class)||empty($teacher)||empty($date)||empty($slot))
{
echo "<h2 style='color:red;'>All fields are required!</h2>";
}
else
{

echo "<h2>Meeting Confirmation</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Parent Name</td><td>$parent</td></tr>";
echo "<tr><td>Student Name</td><td>$student</td></tr>";
echo "<tr><td>Class</td><td>$class</td></tr>";
echo "<tr><td>Teacher</td><td>$teacher</td></tr>";
echo "<tr><td>Meeting Date</td><td>$date</td></tr>";
echo "<tr><td>Time Slot</td><td>$slot</td></tr>";

echo "</table>";

echo "<br><h3 style='color:green;text-align:center;'>
Appointment Booked Successfully!
</h3>";

}

?>

</div>

<footer>
© 2026 ABC Public School | Parent–Teacher Meeting System
</footer>

</body>
</html>