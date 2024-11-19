<?php

class Car {
    public $name;
    public $model="01";

    function __destruct(){
        // echo "bye bye";
    }

    function info(){
        echo 'THIS IS NORMAL FUNCTION <br>';
    }

    function __construct($num){
        $this->name = $num;
        // echo "THIS IS A FUNCTION <br>";
    }


}

// $newObject = new Car('honddddddda');
// echo $newObject->name;

class Bike extends Car{
    public $color ="RED";
    function details(){
        echo "this is chile method <br>";
    }
    function __construct(){

    }
}

$bikeObj = new Bike();
// $bikeObj->details();
// echo $bikeObj->color;
// echo $bikeObj->name;


if ($bikeObj instanceof Bike) {
    echo "This is a Car object.";  // Output: This is a Car object.
} else {
    echo "This is not a Car object.";
}

echo"<br>";
// check the object have or not in the class outpur true or false
var_dump($bikeObj instanceof Student);
echo "<br>";
var_dump(method_exists($bikeObj,"details"))
?>