<?php

// tạo hằng phân biệt chữ hoa chữ thường
define("ADDRESS", "112 ĐỊNH CÔNG");
echo ADDRESS;

// không phân biệt chữ hoa chữ thường
echo "<br>";
define("MYADDRESS", "112 ĐỊNH CÔNG",true);
echo myaddress;


echo "<br>";
// tạo mảng hằng
define("DAY_OF_WEEK", [
    "Mon",
    "Tue",
    "Wed"
]);
echo DAY_OF_WEEK[0];