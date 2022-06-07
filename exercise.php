<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $monthDays = array ('Splorch' => 23, 'Sploo' => 28, 'Splat' => 'v2', 'Splatt' => 3, 'Spleen' => 44, 'Splune' => 30, 'Spling' => 61, 'Slendo' => 61,
    'Sploctember' => 31, 'Splictember' => 31, 'Splanet' => 30, 'TheRest' => 22);
    ?>

    <?php
    echo "The number of days in the shortest month:".min($monthDays);
    echo "<br>";
    echo "Total number of days in a year:".array_sum($monthDays);
    echo "<br>";
    echo "The name of the shortest month:".array_search(min($monthDays),$monthDays);
    ?>

</body>
</html>