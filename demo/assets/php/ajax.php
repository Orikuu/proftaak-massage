<?php
session_start();
require 'assets/php/functions.php';
if(isset($_POST['login'])) {
	$username = trim($_POST['email']);
	$password = trim($_POST['password']);
}

?>