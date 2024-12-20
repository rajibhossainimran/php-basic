<?php

// Abstract class
abstract class Animal {
    // Abstract method (no implementation)
    abstract public function sound();
    
    // Regular method (with implementation)
    public function sleep() {
        echo "The animal is sleeping.<br>";
    }
}

// Dog class extending the abstract Animal class
class Dog extends Animal {
    // Implementing the abstract method
    public function sound() {
        echo "Bark! dog Bark <br>";
    }
}

// Cat class extending the abstract Animal class
class Cat extends Animal {
    // Implementing the abstract method
    public function sound() {
        echo "Meow!<br>";
    }
}

// Create objects of Dog and Cat classes
// $dog = new Dog();
// $cat = new Cat();

// Call methods
// $dog->sound();  // Output: Bark!
// $dog->sleep();  // Output: The animal is sleeping.
// $cat->sound();  // Output: Meow!
// $cat->sleep();  // Output: The animal is sleeping.

$dog = new Dog();
$dog->sound();
$dog->sleep();

$car= new Cat();
$car->sound();
$car->sleep();


?>