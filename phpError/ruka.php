<?php
if(isset($_POST['btnSubmit'])){
    $filename=$_FILES['my_file']['name'];
    $tmp_file=$_FILES['my_file']['tmp_name'];
    $file_size=$_FILES['my_file']['size'];
    $file_type=$_FILES['my_file']['type'];
    $img='image/';
    $kb = $file_size/1024;
    
    if($kb>400){
        echo "File is too large";
    }elseif ($file_type !== "image/jpeg") {
        echo "Type must be JPG (JPEG format).";
    }
    elseif(empty($filename)){
        echo"please enter a image";
    }else{
        move_uploaded_file($tmp_file,$img.$filename);
        echo "successfully";
    }

    // var_dump($filename);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="my_file" id=""/><br>
        <input type="Submit" name="btnSubmit" value="Submit"/>
    </form>
    <?php 
    echo "<img src='" . $img.$filename . "' alt='Uploaded Image'>";
?>

</body>
</html>
