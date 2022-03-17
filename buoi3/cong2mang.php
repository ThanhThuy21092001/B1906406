<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cộng 2 mảng</title>
</head>
<body>
    <?php
        $a = array(344,244,223,7737,9922,-828);
        $b = array(-344,-324,123,773,-9922,828);
        $c = array();
        function cong2mang($a, $b){
            if(count($a) == count($b)){
                echo "(";
                for($i = 0; $i < count($a); $i++){
                    $c[$i] = $a[$i] + $b[$i];
                    if($i < count($a)-1){
                        echo "$c[$i]," ;
                    }
                    else echo "$c[$i]" ;
                }
                echo ")";
            }
            else echo "Hai mang co do dai khac nhau";
        }
        cong2mang($a, $b);
    ?>
</body>
</html>