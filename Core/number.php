<?php

$number_int = 5;
echo $number_int;
echo "<br>".PHP_INT_MAX;
echo "<br>".PHP_INT_MIN;
echo "<br>".PHP_INT_SIZE;
echo "<br> Đây là số nguyên : ".is_int($number_int);
echo "<br> Đây là số nguyên : ".var_dump(is_int(5.5));
echo "<br> Đây là số thực : ".is_float(5.5);


echo "<br>";
// check số
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));