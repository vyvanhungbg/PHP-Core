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
if(isset($_POST["n_number"])){
    $n = $_POST["n_number"];
    $total = 0;
    $multiply = 1;
    $i = 1;
    while ($i<=$n){
        $multiply *=$i;
        $total+=$multiply;
        $i++;
    }

    echo "ANS = ".$total;
}
?>
<br>
<a href="Bai4.php">Quay lại </a>
</body>
</html>