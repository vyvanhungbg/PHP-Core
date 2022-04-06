<?php

class StudentController
{
    public function index()
    {
        require 'model/Student.php';
        $arrayStudent = (new Student())->all();
        require 'view/student/index.php';
    }
}