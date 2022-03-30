<?php

if(!isset($_GET['item'])){
    include 'menu.php';
}else{
    $item = $_GET['item'];
    include 'model.php';
    include 'phone_view.php';
}
