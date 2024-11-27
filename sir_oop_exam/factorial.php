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
            <label for="number1">Input Factorial Number :</label>
            <input type="number" name="num1" require><br><br>
            <button type="submit">Get Factorial</button>
        </form>
    </section>

    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST['num1'];
        $fac=1;
        for($i=1;$i<=$num;$i++){
            $fac=$fac*$i;
        }
        echo "Input number is $num . Factorial result is $fac";
    }
    
    ?>
</body>
</html>