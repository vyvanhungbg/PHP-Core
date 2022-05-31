<?php
function isPrime( $n){
    if($n==2){
        return true;
    }
    $i = 2;
    do{
        if($n % $i == 0){
            return false;
        }
        $i++;
    }while($i*$i <=$n);
    return $n>1 ;
}
$n = 100;
for($i=2;$i<$n;$i++){
    if(isPrime($i)==1){
        echo "$i ";
    }
}
?>