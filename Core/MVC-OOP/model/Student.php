<?php
require_once 'env.php';
require 'StudentObject.php';
class Student
{
    public function all()
    {
        $connect = mysqli_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,
            DB_NAME );
        mysqli_set_charset($connect,'utf8');
        $sql_query = "select * from student";
        $result = mysqli_query($connect,$sql_query);

        $arr = [];
        foreach($result as $row){
            $studentObject = new StudentObject($row['name'],$row['id']);
            $arr[] = $studentObject;
        }

        mysqli_close($connect);
        return $arr;

    }
}