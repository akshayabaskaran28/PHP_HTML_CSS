<!DOCTYPE html>
<html>
<head>
<title>Salary Report</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>ABC Technologies Pvt. Ltd.</h1>
<p>Employee Salary Report</p>
</header>

<div class="container">

<?php

function grossSalary($basic)
{
    $hra = $basic * 0.20;
    $da  = $basic * 0.10;

    return $basic + $hra + $da;
}

function deductions($gross)
{
    return $gross * 0.08;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name=$_POST['name'];
$empid=$_POST['empid'];
$department=$_POST['department'];
$designation=$_POST['designation'];
$basic=$_POST['basic'];

$gross=grossSalary($basic);
$deduction=deductions($gross);
$net=$gross-$deduction;

echo "<h2>Salary Report</h2>";

echo "<table>";

echo "<tr>
<th>Particular</th>
<th>Information</th>
</tr>";

echo "<tr><td>Employee Name</td><td>$name</td></tr>";
echo "<tr><td>Employee ID</td><td>$empid</td></tr>";
echo "<tr><td>Department</td><td>$department</td></tr>";
echo "<tr><td>Designation</td><td>$designation</td></tr>";
echo "<tr><td>Basic Salary</td><td>₹ ".number_format($basic,2)."</td></tr>";
echo "<tr><td>Gross Salary</td><td>₹ ".number_format($gross,2)."</td></tr>";
echo "<tr><td>Deductions</td><td>₹ ".number_format($deduction,2)."</td></tr>";
echo "<tr><td><b>Net Salary</b></td><td><b>₹ ".number_format($net,2)."</b></td></tr>";

echo "</table>";

echo "<br><h3 style='color:green;text-align:center;'>Salary Processed Successfully.</h3>";

}
?>

</div>

<footer>
© 2026 ABC Technologies | Salary Management System
</footer>

</body>
</html>