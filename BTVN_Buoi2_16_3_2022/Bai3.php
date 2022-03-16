<?php

const LEVEL_1 = 15000;
const LEVEL_2 = 12000;
const LEVEL_3 = 9000;
const LEVEL_4 = 1 - 0.12;
const NGUONG_1 = 1;
const NGUONG_2 = 5;
const NGUONG_3 = 6;
const NGUONG_4 = 140;
$soKm = 6;
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

echo "Số tiền :".$soTien;
    ?>