<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the Largest Number</title>
</head>
<body>

<h2>Enter Three Numbers to Find the Largest</h2>

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
// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get the numbers from the form
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     $num3 = $_POST['num3'];

//     // Find the largest number
//     $largest = max($num1, $num2, $num3);

//     echo "<h3>$num1 , $num2 and $num3 .The largest number is: $largest</h3>";
// }
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
