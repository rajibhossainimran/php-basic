<?php 
// create  a class and set their value and property  
class Car{
    public $name ;
    public $model ="b2123";
    public $color ="black";
    function info($bname){
        return $this->name = $bname;
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
echo $my_car->info("Audi auto");

// Create a dynamic class
class Bike {
    public $name;
    public $model;
    public $color;

    // Method to set the name and color
    function set_name($fname, $fcolor) {
        $this->name = $fname;
        $this->color = $fcolor;
    }

    // Method to get the name and color (return the values)
    function get_name() {
        return "<br><br> Name:<br>" . $this->name . ", Color: <br>" . $this->color;
    }
}

// Create an object of the Bike class
$my_bike = new Bike();

// Set the name and color of the bike
$my_bike->set_name("Bicycle", "Red");

// Get the name and color of the bike and display it
echo $my_bike->get_name();

?>