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
    $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December');
    
    $i = 0;
    for($i = 0; $i <= 11; $i++)
    {
        echo $month[$i]. "\n";
    }
    ?>

    <?php
    echo "<br>";
    echo "<br>";
    sort($month);//using for alphabetical order
    $arrlength = count($month); //using for loop
        for ($x=0; $x < $arrlength; $x++) {
            echo $month[$x];
            echo "<br>";
        }
    ?>

    <?php
    echo "<br>";
    echo "<br>";
    foreach ($month as $key => $val) //using foreachloop
        { 
        echo "The value of key $key is: $val<br>"; 
        } 
        /* Only retrieves the value for the current element and 
        ignores the
        key */ 
        foreach ($month as $val) { 
        echo "Value: $val<BR>"; }
    ?>
</body>
</html>