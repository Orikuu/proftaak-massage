<?php 
require 'assets/php/functions.php';

// the SQL string that fetches data....
$selectSQL = "SELECT `title`, `description`, `image`, `id` FROM `treatment`";
// This is a prepared statement, not necessary with this simple query with no variables, but anyway...

// run query and store the resource into variable
$res = $conn->query($selectSQL);

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
<link rel="stylesheet" href="./css/behandeling.css">
<link rel="stylesheet" href="./css/treatment.css">
<title>Care</title>
</head>
<body>
  <nav class="navbarbg navbar navbar-expand-md navbar-light sticky-top">
    <a class="navbar-brand" href="index.php">Care</a>
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="behandeling.php">Behandeling</a> 
      <a class="nav-item nav-link" href="webshop.php">Webshop</a>
      <a class="nav-item nav-link" href="contact.php">Contact</a>
    </div>
    <div class="navbar-nav ml-auto">
        <a class="navlogin nav-item nav-link" href="login.php">Login</a>
        <a class="navlogin nav-item nav-link" href="register.php">Register</a>
    </div>
  </nav>

  <div id="topAnchor"></div>
  <div id="maincontainer">
    <ul class="nav justify-content-center">
      <?php foreach($res as $v) { ?>

      <li class="nav-item">
        <!-- Go to anchor '<?php echo $v['image']; ?>' -->
        <a class="nav-link active" href="#<?php echo $v['id']; ?>"><?php echo $v['image']; ?></a>
      </li>
      <?php } ?>
    </ul>

    <?php foreach($res as $v) { ?>

    <!-- <?php echo $v['title']; ?> tab -->

    <!-- Echo ID for anchor's reference -->
    <div id="<?php echo $v['id']; ?>">
      <div class="whitespace mt-3 text-center">
        <!-- Echo title -->
        <p><?php echo $v['title']; ?></p>
        <!-- Echo description -->
        <p class="content"><?php echo $v['description']; ?></p>
      </div>
      <!-- Echo image id -->
      <div id="<?php echo $v['image']; ?>"></div>
    </div>

    <?php } ?>

    <?php include('./assets/inc/footer.json') ?> 
  </div>

  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>