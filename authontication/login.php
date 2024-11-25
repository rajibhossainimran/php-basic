
<?php
session_start();
if(isset($_POST["btnSubmit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username=="admin" && $password == "123"){
        $_SESSION['myName']=$username;
        header("location:dashboard.php");
    }else{
        $msg ="Username or Password is incorrect !";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      font-weight: bold;
      color: #555;
      margin-bottom: 5px;
      display: block;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
      outline: none;
    }

    .input-group input:focus {
      border-color: #4caf50;
      box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
    }

    .login-button {
      background-color: #4caf50;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-button:hover {
      background-color: #45a049;
    }

    .forgot-password {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: #555;
      text-decoration: none;
    }

    .forgot-password:hover {
      color: #4caf50;
    }

    /* Responsive Design */
    @media (max-width: 480px) {
      .login-container {
        padding: 20px;
      }

      .input-group input {
        font-size: 14px;
      }

      .login-button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form action="#" method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>

      <button type="submit" name="btnSubmit" class="login-button">Login</button>
      
      <a href="#" class="forgot-password">Forgot your password?</a>
    </form>
    <?php
    echo isset($msg)?$msg:"";
    
    ?>
  </div>

</body>
</html>
