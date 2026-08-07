<!DOCTYPE html>
<html>
<head>
    <title>Attendance Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Attendance Report</h2>

<?php

function attendancePercentage($present, $working)
{
    return ($present / $working) * 100;
}

function eligibility($percentage)
{
    if($percentage >= 75)
        return "Eligible for Examination";
    else
        return "Not Eligible for Examination";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $working = $_POST['working'];
    $present = $_POST['present'];

    if($present > $working)
    {
        echo "<h3 style='color:red;'>Days Present cannot be greater than Total Working Days.</h3>";
    }
    else
    {
        $percentage = attendancePercentage($present, $working);
        $status = eligibility($percentage);

        echo "<table>";

        echo "<tr><th>Field</th><th>Details</th></tr>";

        echo "<tr><td>Student Name</td><td>$name</td></tr>";
        echo "<tr><td>Register Number</td><td>$regno</td></tr>";
        echo "<tr><td>Total Working Days</td><td>$working</td></tr>";
        echo "<tr><td>Days Present</td><td>$present</td></tr>";
        echo "<tr><td>Attendance Percentage</td><td>".number_format($percentage,2)." %</td></tr>";
        echo "<tr><td>Eligibility</td><td><b>$status</b></td></tr>";

        echo "</table>";
    }
}
else
{
    echo "<h3>No data received.</h3>";
}

?>

</div>

</body>
</html>