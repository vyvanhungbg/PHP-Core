<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['cal_box'])){
    try {
        $res =0;
        eval('$res = ' .$_POST['cal_box'].';');
        echo $res;
    }catch (Exception $e){
        echo "Lỗi phép tính !. Vui lòng nhập lại ";
    }
}
?>

<br>
<a href="Bai2.php">Quay lại </a>
</body>
</html>
