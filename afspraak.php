<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="#1 massage praktijk in Helmond.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Syncopate" />
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="./css/afspraak.css">
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="./css/dark-mode.css">
<title>Care
</title>
</head>
<body>
  <?php include('./assets/inc/nav.json') ?>

  <div class="loginbox">
    <form action="contact-form.php" method="POST">
      <!-- Select field -->
      <p>Behandeling</p>
      <div class="selectItem input-group">
        <select class="custom-select dropdown" id="inputGroupSelect01">
          <option selected>. . .</option>
          <option value="relax">Relax massage</option>
          <option value="sport">Sport massage</option>
          <option value="bindweefsel">Bindweefsel</option>
          <option value="hotstone">Hotstone massage</option>
          <option value="voetreflex">Voetreflex massage</option>
          <option value="dorn">Dorn therapie</option>
        </select>
      </div>
      <!-- Username -->
      <p>Username</p>
      <input type="text" id="username" placeholder="Enter Username">
      <!-- Password -->
      <p>Password</p>
      <input type="password" id="password" placeholder="Enter Password">
    </form>
  </div>
  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>
