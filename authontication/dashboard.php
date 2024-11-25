<?php

session_start();
if(!isset($_SESSION['myName'])){
    header("location:login.php");
}



// logout.php


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to Your Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #4caf50;
      color: white;
      padding: 10px;
      text-align: center;
    }

    .navbar h1 {
      margin: 0;
    }

    .content {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .content h2 {
      color: #333;
    }

    .content p {
      font-size: 18px;
      line-height: 1.6;
      color: #666;
    }

    .logout-button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto;
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      text-align: center;
      cursor: pointer;
    }

    .logout-button:hover {
      background-color: #e53935;
    }
    a {
    text-decoration: none;  /* Removes underline from navigation links */
    color: #333;  /* Set link color */
    
  }
  </style>
</head>
<body>

  <div class="navbar">
    <h1>Welcome to Your Dashboard</h1>
  </div>

  <div class="content">
    <h2>Hello, Username!</h2>
    <p>Welcome to your dashboard. Here, you can manage your settings, view your activity, and more.</p>
    <button class="logout-button" ><a href="logout.php">LOGOUT</a></button>
  </div>

</body>
</html>
