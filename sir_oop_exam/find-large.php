<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find largest number_format</title>
    <style>
      
        form{
            width: 400px;
            border:1px solid gray;
            padding: 20px;
        }
    </style>
</head>
<body>
    <section>
        <form action="" method="post">
            <label for="number1">Number 1 :</label>
            <input type="number" name="num1" require><br><br>

            <label for="number2">Number 2 :</label>
            <input type="number" name="num2" require><br><br>

            <label for="number3">Number 3 :</label>
            <input type="number" name="num3" require><br><br>
            <button type="submit">Submit</button>
        </form>
    </section>

    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $num3=$_POST['num3'];

        $largest = max($num1,$num2,$num3);
        echo"Numbers $num1 ,$num2 and $num3 . Largest number is $largest";
    }
    
    ?>
</body>
</html>