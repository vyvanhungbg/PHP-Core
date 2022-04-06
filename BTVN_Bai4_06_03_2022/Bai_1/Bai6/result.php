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
    echo "Với n = ".$n." Dãy là : ";
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
    for($i=2;$i<$n;$i++){
        if(isPrime($i)==1){
            echo "$i ";
        }
    }
}
?>
<br>
<a href="../main/menu.php">Quay lại </a>
</body>
</html>