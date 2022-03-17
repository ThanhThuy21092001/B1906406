<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php
    $x = 1;
    echo "while : <br>";
    while ($x <= 5){
        echo  "The number is: $x <br>";
        $x++;

    }

    echo "for: <br>";
    $x = 1;
    for ($x = 0; $x <= 10; $x++){
        echo "The number is: $x <br>";
 
    }

    echo "foreach: <br>";
    $colors = array ("red","green","blue","yellow");
    foreach($colors as $value){
        echo "$value <br>";
    }
    ?>
</body>
</html>