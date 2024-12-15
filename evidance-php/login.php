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
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        section {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-size: 14px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="text"]:focus {
            border-color: #0056b3;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .table-container {
            margin-top: 40px;
            width: 100%;
            max-width: 500px;
            overflow-x: auto;
            margin-left: auto;
            margin-right: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f1f1f1;
            color: #333;
        }
        td {
            background-color: #fafafa;
        }
        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }
        tr:hover td {
            background-color: #eef2f7;
        }
    </style>
</head>
<body>

    <section>
        <h2>Login</h2>
        <form action="" method="post">
            <label for="email">Email</label><br><br>
            <input type="text" name="email" placeholder="rajib@gmail.com" required><br><br>
            <?php echo isset($messageEmail) ? $messageEmail : ''; ?>

            <label for="password">Password</label><br><br>
            <input type="text" name="password" placeholder="1234" required><br><br>
            <button type="submit" name="btnLogin">Login</button>
            <?php echo isset($logERR) ? $logERR : ''; ?>
        </form>
    </section>

    <div class="table-container">
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
    </div>

</body>
</html>
