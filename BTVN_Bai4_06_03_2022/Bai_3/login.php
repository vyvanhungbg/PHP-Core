<?php
$cookie_name = "username";
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $cookie_value =  $username;
    echo 'Xin chào '.$username;
    if(isset($_POST['rememberMe'])){
        if($_POST['rememberMe']=='on'){
            setcookie($cookie_name, $cookie_value,time()+(86400*10));
        }else{
            setcookie($cookie_name,"",time()-3600);
        }
    }else{
        setcookie($cookie_name,"",time()-3600);
    }
}
?>

<?php
if(isset($_COOKIE[$cookie_name])){
    echo ' Thông tin bạn đã được lưu lại';
}else{
    echo 'Đã đăng nhập thông tin sẽ không được lưu lại';
}
?>
