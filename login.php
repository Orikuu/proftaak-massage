<?php
require 'assets/php/functions.php';

//Check to see if they clicked Login
if(isset($_POST['log']))
{
  //1. Check if the database has this username
  $postuser = $_POST['username'];
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '".$postuser."'");
  if (mysqli_num_rows($result)==0) {
    //2. Check if the username has this password
    $postpass = $_POST['password'];
    $result2 = mysqli_query($conn, "SELECT password FROM users WHERE username = '".$postuser."' AND password = '".$postpass."'");
    if (mysqli_num_rows($result2)==0) {
      ?><script type="text/javascript">console.log('Successfully logged in!');</script><?php
    }
  }
}
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
<link rel="stylesheet" href="./css/dark-mode.css">
<title>Care</title>
</head>
<body>
  <?php include('./assets/inc/nav.json') ?>

  <div class="maincontainer col-sm-6">
    <div class="loginbox">
      <img class="avatar" src="./img/Fiji.jpg">
      <h1>Login</h1>
      
      <!-- Login form -->
      <form method="POST">
        <!-- Username -->
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter Usename">
        <!-- Password -->
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password">
        <!-- Submit -->
        <input class="btn col-span-4" type="submit" name="log" value="Login">
      </form>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>