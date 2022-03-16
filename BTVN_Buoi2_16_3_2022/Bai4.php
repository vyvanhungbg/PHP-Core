<?php
$n = 4;
$total = 0;
$multiply = 1;
$i = 1;
while ($i<=$n){
    $multiply *=$i;
    $total+=$multiply;
    $i++;
}

echo "ANS = ".$total;
?>
