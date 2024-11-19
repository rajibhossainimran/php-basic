<?php

class Car {
public $name;
public $model;

function __destruct(){
    echo "bye bye";
}

function info(){
    echo 'THIS IS NORMAL FUNCTION <br>';
}

function __construct(){
    echo "THIS IS A FUNCTION <br>";
}


}

$newObject = new Car();
echo $newObject->info();


?>