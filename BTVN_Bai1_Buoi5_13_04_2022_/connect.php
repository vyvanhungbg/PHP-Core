<?php
$DB_HOSTNAME ="localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE_NAME = "aws_example";
$connect = mysqli_connect($DB_HOSTNAME,$USERNAME,$PASSWORD,$DATABASE_NAME);
if(!$connect){
    die("Lỗi kết nối : ". mysqli_connect_error());
}
