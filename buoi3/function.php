<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
    declare(strict_types=0);
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, 10);
        // it will return 15
    echo addNumbers(5, “so 10”);
        // neu 1 tham so la chuoi co the se xuat thong bao loi
    
    ?>

</body>
</html>