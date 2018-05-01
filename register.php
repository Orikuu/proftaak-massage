<?php 
require 'assets/php/functions.php';


$firstnameError = "";
$lastnameError = "";
$usernameError = "";
$passwordError = "";

function resetVars() {
    $firstname  = "";
    $lastname   = "";
    $username   = "";
    $password   = "";
}

resetVars();

// Check to see if form is submitted
if(isset($_POST['save']))
{
    // error messages
    $errorMessages = array();
   
    // Assign posted form data to new variables.
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    //Empty variables for the errors

    if($firstname == "")
    {
        $firstnameError = "Please enter your first name!";
    }

    if($lastname == "")
    {
        $lastnameError = "Please enter your last name!";
    }

    if($username == "")
    {
        $usernameError = "Please enter your username!";
    }

    if($password == "")
    {
        $passwordError = "Please enter your password!";
    }

    // Count number of keys or indexes in $errorMessages
    // If zero, nothing's wrong.
    if(count($errorMessages) == 0)
    {
        // SQL to send data to database.
        $sql = "INSERT INTO users (firstname, insertion, lastname, username, password)
        VALUES ('".$_POST["firstname"]."','".$_POST["insertion"]."','".$_POST["lastname"]."','".$_POST["username"]."','".$_POST["password"]."')";
        $result = mysqli_query($conn,$sql);
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
<title>Care</title>
</head>
<body>
  
  <?php include('./assets/inc/nav.json') ?>

  <div class="maincontainer col-sm-6">
    <div class="loginbox">
        <img class="avatar" src="./img/Fiji.jpg">
        <h1>Registreren</h1>
      
        <form method="POST">
            <!-- First name -->
            <p>First name</p>
            <input type="text" name="firstname" placeholder="First name">
            <a><?php echo $firstnameError ?></a>
            <!-- Insertion -->
            <p>Insertion</p>
            <input type="text" name="insertion" placeholder="Insertion">
            <!-- Last name -->
            <p>Last name</p>
            <input type="text" name="lastname" placeholder="Last name">
            <a><?php echo $lastnameError ?></a>
            <!-- Username -->
            <p>Username</p>
            <input type="text" name="username" placeholder="Usename">
            <a><?php echo $usernameError ?></a>
            <!-- Password -->
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <a><?php echo $passwordError ?></a>
            <!-- Submit -->
            <input type="submit" name="save">
        </form>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>