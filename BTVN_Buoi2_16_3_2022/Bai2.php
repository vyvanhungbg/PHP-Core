<?php
function tong($a, $b){
    return $a+$b;
}

function hieu($a, $b){
    return $a-$b;
}

function tich($a, $b){
    return $a*$b;
}

function chia($a, $b){
    if($b ==0){
        return "\n$b không hợp lệ cho phép toán này \n";
    }else{
        return $a/$b;
    }
}


function canBac2($a){
    if($a<0){
        return "\n$a không hợp lệ cho phép toán này \n";
    }else{
        return sqrt($a);
    }

}
function mu($a, $b){
    return pow($a,$b);
}

function giaiThua($a){
    $num = abs($a);
    $n = 1;
    for($i=1;$i<=$num;$i++){
        $n*=$i;
    }
    if($a<0){
        return -$n;
    }else{
        return $n;
    }
}
$a = 0;
$b = 0;


function nhap(){
    global $a;
    echo "\n "."Nhập 1 số ";
    $a = readline();
}
function nhap2($mess1,$mess2){
    global $a,$b;
    echo "\n ".$mess1;
    $a = readline();
    echo "\n ".$mess2;
    $b = readline();
}
do{
    echo "\n Lựa chọn một trong dòng sau đây";
    echo "\n 1.Tổng ";
    echo "\n 2.Hiệu ";
    echo "\n 3.Tích ";
    echo "\n 4.Thương ";
    echo "\n 5.Lũy thừa ";
    echo "\n 6.Căn bậc 2 ";
    echo "\n 7.Giai thừa ";

    $choose =0;
    echo "\n Nhập lựa chọn : ";
    $choose = readline();

    switch ($choose){
        case 1:
            echo "\nTính tổng 2 số : ";
            nhap2("Nhập số thứ 1 : ", "Nhập số thứ 2 : ");
            echo "Tổng $a + $b là : ".tong($a,$b);
            break;
        case 2:
            echo "\nTính hiệu 2 số : ";
            nhap2("Nhập số thứ 1 : ", "Nhập số thứ 2 : ");
            echo "Hiệu $a - $b là : ".hieu($a,$b);
            break;
        case 3:
            echo "\nTính tích 2 số : ";
            nhap2("Nhập số thứ 1 : ", "Nhập số thứ 2 : ");
            echo "Tích $a * $b  là : ".tich($a,$b);
            break;
        case 4:
            echo "\nTính thương 2 số : ";
            nhap2("Nhập số thứ 1 : ", "Nhập số thứ 2 : ");
            echo "Thương  $a \ $b là : ".chia($a,$b);
            break;
        case 5:
            echo "\nLũy thừa 1 số : ";
            nhap2("Nhập cơ số : ", "Nhập số mũ : ");
            echo "Kết quả $a^$b là : ".mu($a,$b);
            break;
        case 6:
            echo "\nCăn bậc 2 số : ";
            nhap();
            echo "Căn băc 2 của $a là : ".canBac2($a);
            break;
        case 7:
            echo "\nGiai thừa 1 số :  : ";
            nhap();
            echo "Giai thừa của $a là : ".giaiThua($a);
            break;
        case 0:
            echo "Đã thoát chương trình !";
            return;
    }
}while(true);
?>