<!DOCTYPE html>
<html>
<head>
    <title>String Analysis Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>String Analysis Result</h2>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $title = $_POST['title'];

    $vowels = 0;
    $consonants = 0;
    $digits = 0;
    $special = 0;

    $length = strlen($title);

    for($i=0; $i<$length; $i++)
    {
        $ch = $title[$i];

        if(ctype_alpha($ch))
        {
            if(stripos("AEIOU", $ch) !== false)
                $vowels++;
            else
                $consonants++;
        }
        elseif(ctype_digit($ch))
        {
            $digits++;
        }
        elseif($ch != " ")
        {
            $special++;
        }
    }

    echo "<table>";

    echo "<tr><th>Analysis</th><th>Count</th></tr>";

    echo "<tr><td>Entered Title</td><td>$title</td></tr>";
    echo "<tr><td>Total Characters</td><td>$length</td></tr>";
    echo "<tr><td>Vowels</td><td>$vowels</td></tr>";
    echo "<tr><td>Consonants</td><td>$consonants</td></tr>";
    echo "<tr><td>Digits</td><td>$digits</td></tr>";
    echo "<tr><td>Special Characters</td><td>$special</td></tr>";

    echo "</table>";
}
else
{
    echo "<h3>No input received.</h3>";
}

?>

</div>

</body>
</html>