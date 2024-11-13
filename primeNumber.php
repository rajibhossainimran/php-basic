<?php
$number = 4978937598374957349857;
$count = 0;
    if ($number <= 1) {
        echo "$number not prime not composit";
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $count++;
            break;
        }
    }

if($count==0){
    echo "$number this is prime number";
}else{
    echo "$number this is not a prime number";;
}

?>