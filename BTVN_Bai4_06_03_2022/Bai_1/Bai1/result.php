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
session_start();
if(isset($_SESSION["n"])){
    $n = $_SESSION["n"];
    $sum = 0;
    $tmp = 1;
    for($i=1;$i<=$n;$i++){
        $tmp*=$i;
        $sum+=$tmp;
    }

    echo "Với n = ".$n." Kết quả là : {$sum}";
}
?>
<br>
<a href="../main/menu.php">Quay lại </a>
</body>
</html>