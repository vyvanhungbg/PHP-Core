<?php

$n = 9;
function isPrime( $n){
    $i = 2;
    do{
        if($n % $i == 0){
            return false;
        }
        $i++;
    }while($i*$i <=$n);
    return $n>2 ;
}
echo isPrime($n)==true?"$n là số nguyên tố : ": "$n không là số nguyên tố";

?>