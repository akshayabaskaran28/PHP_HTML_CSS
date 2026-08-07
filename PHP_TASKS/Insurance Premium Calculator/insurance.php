<!DOCTYPE html>
<html>
<head>
<title>Premium Result</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php

$name=$_POST['name'];
$age=$_POST['age'];
$term=$_POST['term'];
$coverage=$_POST['coverage'];

if($age<=30)
$rate=0.02;
elseif($age<=50)
$rate=0.03;
else
$rate=0.05;

$premium=($coverage*$rate)*$term;

echo "<h2>Policy Summary</h2>";

echo "<table>";

echo "<tr><th>Field</th><th>Details</th></tr>";

echo "<tr><td>Name</td><td>$name</td></tr>";
echo "<tr><td>Age</td><td>$age</td></tr>";
echo "<tr><td>Policy Term</td><td>$term Years</td></tr>";
echo "<tr><td>Coverage Amount</td><td>₹$coverage</td></tr>";
echo "<tr><td>Premium Amount</td><td><b>₹$premium</b></td></tr>";

echo "</table>";

?>

</div>

</body>
</html>