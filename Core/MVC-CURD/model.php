<?php
require_once 'env.php';
$connect = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,
    DB_NAME );
mysqli_set_charset($connect,'utf8');



switch($action){
    case '';
        $sql_query = 'select * from student';
        $result = mysqli_query($connect, $sql_query);
        break;

    case 'store':
        $sql_query = "insert into student(name) values('$name')";
        mysqli_query($connect, $sql_query);
        break;
    case 'edit':
        $sql_query = "select * from student where id = '$id'";
        $result = mysqli_query($connect, $sql_query);
        $student = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql_query = "update student set name ='$name' where id = '$id'";
        mysqli_query($connect, $sql_query);
        break;
    case 'delete':
        $sql_query = "delete from student where id = '$id'";
        mysqli_query($connect, $sql_query);
        break;

    default:
        echo 'Bad request';
}

mysqli_close($connect);