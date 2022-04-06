<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
const LEVEL_1 = 15000;
const LEVEL_2 = 12000;
const LEVEL_3 = 9000;
const LEVEL_4 = 1 - 0.12;
const NGUONG_1 = 1;
const NGUONG_2 = 5;
const NGUONG_3 = 6;
const NGUONG_4 = 140;
if(isset($_SESSION["n"])){

    $soKm = $_SESSION["n"];
    $soTien = 0;
    if($soKm  <=NGUONG_1){
        $soTien += $soKm*LEVEL_1;
    }else if($soKm <= NGUONG_2){
        $soTien = NGUONG_1*LEVEL_1 + ($soKm - NGUONG_1)*LEVEL_2;
    }else {
        $soTien = NGUONG_1*LEVEL_1 + (NGUONG_2-NGUONG_1)*LEVEL_2 + ($soKm-NGUONG_2)*LEVEL_3;
        if($soKm > NGUONG_4)
            $soTien*=LEVEL_4;
    }
    echo "Với n = ".$soKm."Kết quả là : {$soTien}". "  VNĐ";
}
?>
<br>
<a href="../main/menu.php">Quay lại </a>
</body>
</html>