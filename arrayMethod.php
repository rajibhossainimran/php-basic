<?php 

// marge two array 
echo "Marge method use to marge array <br><br>";

$a = array('a','b','c','d');
$b = array('e','f','g','h');
$marge = array_merge($a,$b);
print_r($marge);
echo"<br><br>";

// array pop method 
echo "array pop method <br>";
$arr = array('Orange','Apple','Lichi');
array_pop($arr);
print_r($arr);
echo"<br><br>";

// array push method 
echo "array push method <br><br>";
array_push($arr,"Tomato","Pineapple");
print_r($arr);
echo"<br><br>";

// array shift method 
echo "array shift method  get first element of an array <br><br>";
$shif=array_shift($arr);
print_r($shif);
echo"<br><br>";

// array unshift method 
echo "array unshift method push first element in a array <br><br>";
array_unshift($arr,"Cocococonut");
print_r($arr);
echo"<br><br>";

echo "array sice method . slice length 3 . Give output yellow and brown. Create a variable to hold the value <br><br>";
$a1 = array("red","green","blue","yellow","brown");
$slice = array_slice($a1,3);
print_r($slice);
echo"<br><br>";

echo "Start the slice from from the second array element, and return only two elements <br><br>";
$a2 = array("red","green","blue","yellow","brown");
$slice2 = array_slice($a2,1,2);
print_r($slice2);
echo"<br><br>";

?>