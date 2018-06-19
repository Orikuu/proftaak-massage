<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php
require('db.php');
include("auth.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Naam product</th>
                            <th>Beschrijving</th>
                            <th>Afbeelding</th>
                            <th>Prijs</th>
                            <th width="100">Actie</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="col-md-3">
                <form id="sidebar">
                    <div class="form-group hidden">
                        <label for="id"></label>
                        <input id="id" name="id" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="tl">Naam</label>
                        <input id="tl" name="tl" class="form-control" placeholder="Naam"/>
                    </div>
                    <div class="form-group">
                        <label for="dc">Beschrijving</label>
                        <input id="dc" name="dc" class="form-control" placeholder="Beschrijving"/>
                    </div>
                    <div class="form-group">
                        <label for="im">Afbeelding</label>
                        <input id="im" name="im" class="form-control" placeholder="Afbeelding"/>
                    </div>
                    <div class="form-group">
                        <label for="pr">Prijs</label>
                        <textarea id="pr" name="pr" class="form-control" placeholder="Prijs"></textarea>
                    </div>
                    <button type="button" id="save" class="btn btn-primary" onclick="saveData()">Save</button>
                    <button type="button" id="update" class="btn btn-warning" onclick="updateData()">Update</button>
<a class="logout btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables.bootstrap.js"></script>
    <script src="script.js"></script>
</body>
</html>