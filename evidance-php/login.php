<?php 
session_start();

if(isset($_POST["btnLogin"])){
    $mail = $_POST["email"];
    $password = $_POST['password'];

    // get file email and password form storpass.txt file 
    $file = file('storePass.txt');
    foreach($file as $line){
        list($email,$pass) = explode(',',$line);
        if(!preg_match("/^[a-zA-Z0-9]{4,}[@][a-zA-Z]{4,6}[.][a-zA-Z]{2,3}$/",$email)){
		
            $messageEmail = "Please enter a valid email.";
            
        }else{
            if(trim($email) == "$mail" && trim($pass) == "$password"){
                $_SESSION["my_session"] = $email;
                header("location:fileUpload.php");
        }else{
            $logERR = "Email or Password is incorrect";
        }
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <label for="email">Email</label><br><br>
            <input type="text" name="email" placeholder="rajib@gmail.com"><br><br>
            <?php 
            echo isset($messageEmail) ? $messageEmail : '';
            ?>

            <label for="password">Password</label>
            <input type="text" name="password" id="" placeholder="1234"><br><br>

            <button type="submit" name="btnLogin">LOGIN</button>
            <?php 
            echo isset($logERR) ? $logERR : '';
            ?>
        </form>
    </section>
    <table>
        <tr>
            <th>rajib@gmail.com</th>
            <th>imran@gmail.com</th>
        </tr>
        <tr>
            <td>1234</td>
            <td>3456</td>
        </tr>
        
    </table>
</body>
</html>