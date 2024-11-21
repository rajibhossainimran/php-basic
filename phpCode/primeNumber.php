<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime number</title>
</head>
<body>
<form method="POST" action="">
    <label for="num1">Number 1:</label>
    <input type="number" id="num1" name="num1" required><br><br>
    <input type="submit" value="check prime">
</form>

<?php

$number = $_POST['num1'];
// $number = 4978937598374957349857;
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

</body>
</html>



