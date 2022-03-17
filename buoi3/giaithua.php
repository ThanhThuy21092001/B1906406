<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai thừa</title>
</head>
<body>
    <?php
    $t = 10;

    function tinhGiaiThua($n){
        $giai_thua = 1;
        if($n == 0 || $n == 1){
            return $giai_thua;
        }
        else{
            for($i = 2; $i <= $n; $i++){
                $giai_thua *= $i;
            }
            return $giai_thua;
        }
    }
    echo ("Giai thua cua " . $t . " la: " .tinhGiaiThua($t));
    ?>
</body>
</html>