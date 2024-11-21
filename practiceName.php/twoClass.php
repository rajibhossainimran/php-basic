<?php
namespace myClassTwo;

// interface function 
interface Students{
    public function makeResult();
}

class Student implements Students{
    public function makeResult(){
        echo "Your id 1285228 . You have got A";
    }
}


//   $animal = new Cat();
//   $animal->makeSound();

?>