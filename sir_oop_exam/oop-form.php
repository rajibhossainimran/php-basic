<?php
require_once("myClass.php");
if(isset($_POST['btnSubmit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $batch = $_POST['batch'];

    $student = new Trainee($id,$name,$batch);
    $student->save();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Form</title>
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
            <label for="id">Trainee Id :</label>
            <input type="number" name="id" require><br><br>
            <label for="name">Trainee Name :</label>
            <input type="text" name="name" require><br><br>
            <label for="batch">Trainee Batch :</label>
            <input type="text" name="batch" require><br><br>
            <button type="submit" name="btnSubmit">Submit</button>
        </form>
    </section>

 <?php
 Trainee::display();
 ?>
</body>
</html>