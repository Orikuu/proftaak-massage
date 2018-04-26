<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="#1 massage praktijk in Helmond.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Syncopate" />
<link rel="shortcut icon" href="img/OSSY.ico">
<link rel="stylesheet" href="./css/contact.css">
<title>Care</title>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Care</a>
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="behandeling.php">Behandeling</a>
      <a class="nav-item nav-link" href="#">Webshop</a>
      <a class="nav-item nav-link active" href="contact.php">Contact</a>
    </div>
    
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
      </button>
      <div class="showdrop dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php include('./assets/inc/login.json') ?>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-4">
      <div class="col-sm mr-2">
        <h2>Contact info</h2>

        <ul>
          <li><a>Carrie Koolen</a></li>
          <li><a>0699999999</a></li>
          <li><a>info@carrie.nu</a></li>
        </ul>
      </div>
      <div class="col-sm ml-2">
        <?php include('./assets/inc/login.json') ?>
      </div>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>