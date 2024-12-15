<?php 

if (isset($_POST["upload"])) {
    if (isset($_FILES["myFile"])) {
        $imageFile = $_FILES["myFile"];
        // var_dump($imageFile);
    } else {
        echo "No file uploaded.";
    }

    $fileName = $_FILES["myFile"]["name"];
    $temp = $_FILES["myFile"]["tmp_name"];
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $imgLocaton = "uploads/";
    $file_size = $_FILES["myFile"]["size"];
    $kb = $file_size / 1024;

    if (($kb > 100) || !in_array($fileType, ["jpg", "png", "jpeg", "gif"])) {
        if ($kb > 100) {
            $msg1 = "Image is too large. Your image must be a maximum of 100 KB.";
        }
        if (!in_array($fileType, ["jpg", "png", "jpeg", "gif"])) {
            $msg2 = "Also Sorry, only jpg, png, jpeg, or gif formats are allowed!";
        }
    } else {
        move_uploaded_file($temp, $imgLocaton . $fileName);
        echo "Successfully Uploaded!";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <section>
        <h1>file upload dashboard</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Uplaod file</label><br><br>
            <input type="file" name="myFile"><br><br>
            <button type="submit" name="upload">Uplaod</button>
        </form>
    </section>
</body>
</html>
<?php
// Display all uploaded images from the "uploads" directory
$imgLocation = "uploads/";
$images = glob($imgLocation . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

if (count($images) > 0) {
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="Uploaded Image">';
    }
} else {
    echo "No images uploaded yet.";
}
?>