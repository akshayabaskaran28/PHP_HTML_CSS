<!DOCTYPE html>
<html>
<head>
<title>Evaluation Result</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php

$name=$_POST['name'];
$empid=$_POST['empid'];
$score=$_POST['score'];

if($score>=90)
    $rating="Excellent";
elseif($score>=75)
    $rating="Very Good";
elseif($score>=60)
    $rating="Good";
elseif($score>=40)
    $rating="Average";
else
    $rating="Needs Improvement";

echo "<h2>Performance Report</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Employee Name</td><td>$name</td></tr>";
echo "<tr><td>Employee ID</td><td>$empid</td></tr>";
echo "<tr><td>Performance Score</td><td>$score</td></tr>";
echo "<tr><td><b>Employee Rating</b></td><td><b>$rating</b></td></tr>";

echo "</table>";

?>

</div>

</body>
</html>