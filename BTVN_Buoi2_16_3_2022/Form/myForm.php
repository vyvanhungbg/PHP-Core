<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2 Vy Văn Hùng_2019601093</title>

</head>
<body>

<?php
function checkName(){

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        if(strlen($name)==0 || $name==null){
            return false;
        }
        for($i=0;$i<strlen($name);$i++){
            if($name[$i]>='0' && $name[$i]<='9'  ){
                return false;
            }

        }
    }
    return true;



}
function checkPass(){
    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
        $confirm_pass = isset($_POST['confirm_pass']) ? $_POST['confirm_pass'] : '';
        $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%&*])(?=.{8,})/";
        if(!preg_match($regex,$pass) ){
            return false;
        }
    }
    return true;


}
function checkConfirmPass(){
    if(isset($_POST['confirm_pass'])){
        $pass =  isset($_POST['pass']) ?$_POST['pass'] : '';
        $confirm_pass =  $_POST['confirm_pass'];
        if(strcmp($pass, $confirm_pass)){
            return false;
        }
    }
    return true;

}

function checkEmail(){
    if(isset($_POST['email'])){
        $email= $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

            return false;
        }
    }
    return true;

}

function checkMyDate(){
    if(isset($_POST['date'])){
        $date =  $_POST['date'];
        if(!empty($date)){
            $myDate = mb_split("-",$date);
            if(sizeof($myDate)==3){
                return  checkdate($myDate[1],$myDate[2],$myDate[0]);

            }
        }
        return false;
    }
    return true;


}
?>
<form action="myForm.php" name="Form" method="post" >
    <h1>ĐĂNG KÝ THÀNH VIÊN</h1>
    <table>
        <tr >
            <td >Họ và tên</td>
            <td>
                <input type="text" name="name" id="name"  placeholder="Nhập họ và tên" onerror="true" >
                <?php echo checkName() ?"" : "<span style='color: red'> * Họ tên phải là chữ và không chứa số</span>"?>

            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
                <input type="text" name="pass" id="pass" placeholder="Nhập mật khẩu" >
                <?php echo checkPass() ?"" : "<span style='color: red'> * Mật khẩu phải tồn tại ít nhất một chữ hoa,1 một chữ thường , 1 kí tự đặc biệt, và độ dài 8 kí tự trở lên</span>"?>
            </td>
        </tr>
        <tr>
            <td>Khẳng định  mật khẩu</td>
            <td>
                <input type="password" name="confirm_pass" id="confirm_pass"placeholder="Nhập lại mật khẩu">
                <?php echo checkConfirmPass() ?"" : "<span style='color: red'> * Mật khẩu xác định lại không khớp</span>".checkMyDate()?>
            </td>
        </tr>

        <tr>
            <td>Ngày tháng năm sinh</td>
            <td>
                <input type="date" name="date" id="date" >
                <?php echo checkMyDate() ?"": "<span style='color: red'>* Ngày tháng không hợp lệ ! </span>"?>
            </td>
        </tr>
        <tr>
            <td>Email </td>
            <td>
                <input type="text" name="email" id="email"  placeholder="Nhập email">
                <?php echo checkEmail() ?"" : "<span style='color: red'> * Email không đúng định dạng !</span>"?>
            </td>
        </tr>


        <tr >
            <td colspan="2" align="center"><input type="submit" value="Đăng ký"  >
                <input type="button" value="Hủy bỏ"  ></td>

        </tr>
    </table>
</form>
</body>
</html>