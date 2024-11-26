<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="">
    <label for="num1">Number 1:</label>
    <input type="number" id="num1" name="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" id="num2" name="num2" required><br><br>

    <label for="num3">Number 3:</label>
    <input type="number" id="num3" name="num3" required><br><br>

    <input type="submit" value="Find Largest">
</form>
<?php
// header("location:find-large.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $number3 = $_POST['num3'];

    if($number1>$number2 && $number1>$number3){
        echo "$number1 , $number2 and $number3 . Largest number is $number1";
    }elseif($number2>$number1 && $number2>$number3){
        echo "$number1 , $number2 and $number3 . Largest number is $number2";
    }else{
        echo "$number1 , $number2 and $number3 . Largest number is $number3";
    }
}

?>
</body>
</html>
