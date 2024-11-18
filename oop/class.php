<?php 
// create  a class and set their value and property  
class Car{
    public $name = "BMW";
    public $model ="b2123";
    public $color ="black";
    function info(){
        return "This is a race car";
    }

}

// call the class and create a object 
$my_car = new Car();

echo $my_car ->name;
echo "<br><br>";
echo $my_car ->model;
echo "<br><br>";
echo $my_car ->color;

echo "<br><br>";
// call the function inside the class 
echo $my_car ->info();

?>