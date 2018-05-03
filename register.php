<?php 
require 'assets/php/functions.php';

function resetVar() {
    $firstnameError = "";
    $lastnameError = "";
    $usernameError = "";
    $passwordError = "";
    $firstname  = "";
    $lastname   = "";
    $username   = "";
    $password   = "";
}

// Check to see if form is submitted
if(isset($_POST['save']))
{
    // Count error messages
    $errorMessages = 0;
   
    // Assign posted form data to new variables.
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    // Empty variables for the errors

    if($firstname == "")
    {
        $firstnameError = "redUnder";
        $errorMessages++;
    }

    if($lastname == "")
    {
        $lastnameError = "redUnder";
        $errorMessages++;
    }

    if($username == "")
    {
        $usernameError = "redUnder";
        $errorMessages++;
    }

    if($password == "")
    {
        $passwordError = "redUnder";
        $errorMessages++;
    }

    // Count number of keys or indexes in $errorMessages
    // If zero, nothing's wrong.
    if($errorMessages == 0)
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
<body onload="<?php resetVar() ?>">
  
  <?php include('./assets/inc/nav.json') ?>

  <div class="maincontainer col-sm-6">
    <div class="loginbox">
        <img class="avatar" src="./img/Fiji.jpg">
        <h1>Registreren</h1>
      
        <form method="POST">
            <!-- First name -->
            <p>First name *</p>
            <input class="<?php echo $firstnameError ?>" type="text" name="firstname" placeholder="First name">
            <!-- Insertion -->
            <p>Insertion</p>
            <input type="text" name="insertion" placeholder="Insertion">
            <!-- Last name -->
            <p>Last name *</p>
            <input class="<?php echo $lastnameError ?>" type="text" name="lastname" placeholder="Last name">
            <!-- Username -->
            <p>Username *</p>
            <input class="<?php echo $usernameError ?>" type="text" name="username" placeholder="Usename">
            <!-- Password -->
            <p>Password *</p>
            <input class="<?php echo $passwordError ?>" type="password" name="password" placeholder="Password">
            <!-- Submit -->
            <input type="submit" name="save">
        </form>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>