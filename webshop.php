<?php
require 'assets/php/functions.php';

// the SQL string that fetches data....
$selectSQL = "SELECT `title`, `description`, `image`, `price`, `id` FROM `products` ORDER BY `id`";
// This is a prepared statement, not necessary with this simple query with no variables, but anyway...

// Run query and store the resource into variable
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
<link rel="stylesheet" href="./css/webshop.css">
<link rel="stylesheet" href="./css/dark-mode.css">
<title>Care</title>
</head>
<body>
  <?php include('./assets/inc/nav.json') ?>

  <div class="container">
    <div class="row">
      <?php foreach($res as $v) { ?>
      <div class="col-sm-4 mt-5">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $v['title']; ?></h5>
            <p class="card-text desc"><?php echo $v['description']; ?></p>
            <img class="image img" src="./img/<?php echo $v['image']; ?>.png">
            <h5 class="card-title price">€ <?php echo $v['price']; ?></h5>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>