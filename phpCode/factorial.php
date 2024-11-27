<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <section>
        <form action="" method="POST">
        <label for="Factorial Number :">Factorial Number :</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <input type="submit" value="Get Factorial">
        </form>
    </section>

    <?php
    
    $number = $_POST['num1'];
    $factorial =1;

    for($i =1; $i<=$number; $i++){
        $factorial = $factorial*$i;
    }
    echo "The factorial of $number is $factorial .";
    
    ?>
</body>
</html>