<?php

require 'myclass1.php';
require 'myclass2.php';
use MessageOne\A;
use MessageTwo\B;
$obj= new A();
$obj2=new B();
// display the value 
echo $obj->show();
$obj2->show()


?>