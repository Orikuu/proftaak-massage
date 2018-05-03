<?php
require 'assets/php/functions.php';



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="Massage Praktijk Helmond.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Syncopate" />
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/homepage.css">
<title>Care</title>
</head>
<body>
  
  <?php include('./assets/inc/nav.json') ?>

  <div class="maincontainer col-sm-6">
    <div class="loginbox">
      <img class="avatar" src="./img/Fiji.jpg">
      <h1>Login</h1>
      
      <form action="index.php" method="POST">
      <!-- Username -->
      <p>Username</p>
      <input type="text" id="username" placeholder="Enter Usename">
      <!-- Password -->
      <p>Password</p>
      <input type="password" id="password" placeholder="Enter Password">
      <!-- Submit -->
      <input type="submit" value="Login">
    </form>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>