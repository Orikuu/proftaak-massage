<?php 
require 'assets/php/functions.php';

//Check to see if form is submitted
if(isset($_POST['save']))
{
    //Check if the database already has this username
    $postuser = $_POST['username'];
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '".$postuser."'");
    if (mysqli_num_rows($result)==0) {
        //SQL to send data to database.
        $sql = "INSERT INTO users (firstname, insertion, lastname, username, password)
        VALUES ('".$_POST["firstname"]."','".$_POST["insertion"]."','".$_POST["lastname"]."','".$_POST["username"]."','".$_POST["password"]."')";
        $result = mysqli_query($conn,$sql);
    }
    else {
        ?><script type="text/javascript">alert('This username is already in use.');</script><?php
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
<link rel="stylesheet" href="./css/register.css">
<link rel="stylesheet" href="./css/dark-mode.css">
<title>Care</title>
</head>
<body>
  <?php include('./assets/inc/nav.json') ?>

  <div class="maincontainer col-sm-6">
    <div class="loginbox">
        <img class="avatar" src="./img/Fiji.jpg">
        <h1>Registreren</h1>
      
        <form name="register" method="POST">
            <!-- First name -->
            <p>First name *</p>
            <input type="text" name="firstname" placeholder="First name" required>
            <!-- Insertion -->
            <p>Insertion</p>
            <input type="text" name="insertion" placeholder="Insertion">
            <!-- Last name -->
            <p>Last name *</p>
            <input type="text" name="lastname" placeholder="Last name" required>
            <!-- Username -->
            <p>Username *</p>
            <input type="text" name="username" placeholder="Usename" required>
            <!-- Password -->
            <p>Password *</p>
            <input type="password" name="password" placeholder="Password" required>
            <!-- Submit + JS function -->
            <input class="btn col-span-4" type="submit" name="save" onsubmit="validateForm()">
        </form>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>