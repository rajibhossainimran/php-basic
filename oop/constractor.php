<?php

class Car {
    public $name;
    public $model="01";

    function __destruct(){
        echo "bye bye";
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
$bikeObj->details();
echo $bikeObj->color;
// echo $bikeObj->name;

?>