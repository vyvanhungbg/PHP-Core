<?php
session_start();
if(isset($_POST['n_number']) && $_POST['n_number']!=null){
    $_SESSION['n'] = $_POST['n_number'];
}else{

    if(!isset($_SESSION['n']) || $_SESSION['n']==null){
        echo '<li><a href="../main/index.php">Nhập lại n</a></li>';
        die("n Không tồn tại ! Nhập lại n");
    }
}


?>
<ul>
    <li><a href='../main/index.php'>Nhập lại n</a></li>
    <li><a href='../Bai1/result.php'>Bài 1</a></li>
<!--    <li><a href='../Bai2/Bai2.php'>Bài 2</a></li>-->
    <li><a href='../Bai3/result.php'>Bài 3</a></li>
    <li><a href='../Bai4/result.php'>Bài 4</a></li>
    <li><a href='../Bai5/result.php'>Bài 5</a></li>
    <li><a href='../Bai6/result.php'>Bài 6</a></li>
</ul>

