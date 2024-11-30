<?php

$foods = array('pasta','steak','fish','potetos','waterpuri','nopay');
// search p in the whole word 
$filterArray = preg_grep('/p/', $foods);

// search p in the first letter of a word 
$firstLetter = preg_grep('/^p/', $filterArray);
print_r($filterArray);
echo'<br>';
print_r($firstLetter);

?>