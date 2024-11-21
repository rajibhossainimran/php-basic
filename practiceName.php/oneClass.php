<?php
namespace myClassOne;
abstract class Teachers{
    abstract public function teacherID();
    public function teacherName(){
        echo "Md dalowar Hossain <br>";
    } 
}
class Teacher extends Teachers{
    public function teacherID(){
        echo "Teacher Id is 232323223 <br>";
    }
}

?>