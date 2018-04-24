<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="#1 massage praktijk in Helmond.">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
        <h2>Leave message</h2>

        <form action="index.php" method="POST">
          <!-- First name -->
          <label id="first"> First name *</label><br/>
          <input type="text" name="firstname"><br/>

          <!-- Last name -->
          <label id="first">Last name *</label><br/>
          <input type="text" name="lastname"><br/>

          <!-- Email -->
          <label id="first">Email *</label><br/>
          <input type="text" name="email"><br/>

          <!-- Message -->
          <label id="first">Message *</label><br/>
          <textarea class=formMsg name="message"></textarea><br/>

          <!-- Button to send to database -->
          <button type="submit" name="save">save</button>
        </form>
      </div>
    </div>
  </div>


  <?php include('./assets/inc/scripts.json') ?>
</body>
</html>