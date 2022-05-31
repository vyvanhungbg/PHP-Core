<?php
    require('connect.php');
    if(!isset($_POST['submit'])){
        echo "<br><a href='index.php' >Đăng kí tài khoản</a> <br>";
        die("Nhập lại form");

    }
$type_account = $_POST['type_account'];
$full_name = $_POST['full_name'];
$country = $_POST['country'];
$address = $_POST['address'];
$building = $_POST['building'];
$city = $_POST['city'];
$province = $_POST['province'];
$postal_code = $_POST['postal_code'];
$phone_number = $_POST['phone_number'];

$sql_query = "insert into user(type_account, full_name, country, address, building, city, province, postal_code, phone_number) values(
    '$type_account'
    ,'$full_name'
    ,'$country'
    ,'$address'
    ,'$building'
    ,'$city'
    ,'$province'
    ,'$postal_code'
    ,'$phone_number'
                     
)";
//die($sql_query);
mysqli_query($connect, $sql_query);
echo "Tạo tài khoản thành công";

mysqli_close($connect);
?>
<br>
<a href="view_all.php" >Xem tất cả tài khoản</a>
