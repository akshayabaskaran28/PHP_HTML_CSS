<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Student Result</h2>

<?php

function calculateGrade($average)
{
    if($average>=90)
        return "A+";
    elseif($average>=80)
        return "A";
    elseif($average>=70)
        return "B";
    elseif($average>=60)
        return "C";
    elseif($average>=50)
        return "D";
    else
        return "Fail";
}

$name=$_POST['name'];
$regno=$_POST['regno'];
$tamil=$_POST['tamil'];
$english=$_POST['english'];
$maths=$_POST['maths'];
$science=$_POST['science'];
$social=$_POST['social'];

$total=$tamil+$english+$maths+$science+$social;

$average=$total/5;

$grade=calculateGrade($average);

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Student Name</td><td>$name</td></tr>";

echo "<tr><td>Register Number</td><td>$regno</td></tr>";

echo "<tr><td>Total Marks</td><td>$total / 500</td></tr>";

echo "<tr><td>Average Marks</td><td>".number_format($average,2)."</td></tr>";

echo "<tr><td>Grade</td><td>$grade</td></tr>";

echo "</table>";

?>

</div>

</body>
</html>