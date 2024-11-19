<?php

class Student{
    public static $name="rajib hossain <br>";
    public static $roll="1285228 <br>";
    public static function info(){
        echo self::$name; 
        echo self::$roll;
    }
}

// access Student class property 

// echo Student::$name;
// echo Student::$roll;

// call the function 
Student::info();

?>