<?php
$input =[
    'this is 7 o click',
    'this is our class',
    'our batch year is 2024'
];

$result = preg_filter('/[0-9]+/','($0)',$input);
print_r($result) ;
?>