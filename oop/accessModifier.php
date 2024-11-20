<?php

class Students{
    public $name='Rajib Hossain <br>';
    protected $nid ='1232311 <br>';
    protected function getMark(){
        echo 'You have got 5.00 <br>';
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
echo $myObj->name;



?>