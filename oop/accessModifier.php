<?php

class Students{
    protected $nid ='1232311';
    protected function getMark(){
        echo 'You have got 5.00';
    }
}

class Student extends Students{
    public function displayDetail (){
        echo $this->nid;
        $this->getMark();
    }
}

// create object 
$myObj = new Student();
$myObj->displayDetail();

?>