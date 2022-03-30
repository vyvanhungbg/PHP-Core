<?php

$n = 9;
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
echo isPrime($n)==true?"$n là số nguyên tố : ": "$n không là số nguyên tố";

?>