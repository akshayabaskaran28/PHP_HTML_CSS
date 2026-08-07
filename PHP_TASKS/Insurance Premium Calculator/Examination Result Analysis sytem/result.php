<!DOCTYPE html>
<html>
<head>
<title>Result Analysis</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>ABC College</h1>
<p>Student Result Analysis</p>
</header>

<div class="container">

<?php

function percentage($total)
{
    return $total/5;
}

$name=$_POST['name'];
$regno=$_POST['regno'];
$department=$_POST['department'];

$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];

$total=$m1+$m2+$m3+$m4+$m5;
$per=percentage($total);

if($per>=75)
$class="Distinction";
elseif($per>=60)
$class="First Class";
elseif($per>=50)
$class="Second Class";
elseif($per>=40)
$class="Pass";
else
$class="Fail";

echo "<h2>Examination Result</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Information</th></tr>";

echo "<tr><td>Student Name</td><td>$name</td></tr>";
echo "<tr><td>Register Number</td><td>$regno</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Total Marks</td><td>$total / 500</td></tr>";
echo "<tr><td>Percentage</td><td>".number_format($per,2)." %</td></tr>";
echo "<tr><td><b>Class Obtained</b></td><td><b>$class</b></td></tr>";

echo "</table>";

echo "<br><h3 style='color:green;text-align:center;'>Result Generated Successfully.</h3>";

?>

</div>

<footer>
© 2026 ABC College | Examination Result System
</footer>

</body>
</html>