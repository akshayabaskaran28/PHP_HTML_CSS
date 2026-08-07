<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Generated Password</h2>

<?php

function generatePassword($length)
{
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $digits = "0123456789";
    $special = "@#$%&*!?";

    $all = $uppercase . $lowercase . $digits . $special;

    // Ensure at least one character from each category
    $password  = $uppercase[rand(0, strlen($uppercase)-1)];
    $password .= $lowercase[rand(0, strlen($lowercase)-1)];
    $password .= $digits[rand(0, strlen($digits)-1)];
    $password .= $special[rand(0, strlen($special)-1)];

    // Fill remaining length
    for($i = 4; $i < $length; $i++)
    {
        $password .= $all[rand(0, strlen($all)-1)];
    }

    // Shuffle password characters
    return str_shuffle($password);
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $length = $_POST['length'];

    if($length < 8)
    {
        echo "<h3 style='color:red;'>Password length must be at least 8.</h3>";
    }
    else
    {
        $password = generatePassword($length);

        echo "<table>";

        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Password Length</td><td>$length</td></tr>";
        echo "<tr><td>Generated Password</td><td><b>$password</b></td></tr>";

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