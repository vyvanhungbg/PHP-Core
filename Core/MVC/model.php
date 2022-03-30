<?php
require_once 'env.php';
$connect = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,
    DB_NAME );
mysqli_set_charset($connect,'utf8');
$sql_query = "select * from phone where id = '$item'";
$result = mysqli_query($connect,$sql_query);
$phone = mysqli_fetch_array($result);

