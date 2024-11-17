<?php 
echo "get array item using foreach loop <br>";
$myArr = array('Mango','Orange','banana','Coconut',);
foreach($myArr as $inde=>$fruit){
    echo "$inde  : $fruit <br>";
}

$fruits = array('Apple', 'Banana', 'Orange');
echo "Get array item using index <br>";
echo $fruits[0];



?>