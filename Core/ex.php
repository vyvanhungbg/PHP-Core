

<?php
$n = 3;
$total = 0;
$multiply = 1;
for($i = 1;$i<=$n;$i++){
    $multiply *=$i;
    $total+=$multiply;
}

echo "ANS = ".$total;

?>
