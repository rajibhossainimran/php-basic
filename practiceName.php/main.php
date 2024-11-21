<?php
require 'oneClass.php';
require 'twoClass.php';

use  myClassOne\Teacher;
use myClassTwo\Student;

// create object teacher 
$teacherObj= new Teacher();

// create object student 
$studentObj = new Student();

// access teacher 
echo 'Access teacher class <br>';
$teacherObj->teacherID();
$teacherObj->teacherName();
echo "<br><br>";

// access student 
echo "access student class <br>";
$studentObj->makeResult();
?>