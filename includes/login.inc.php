<?php
include 'class-autoload.inc.php';
session_start();

if(!isset($_POST['submit'])){
  header("Location: /");
}

$goback = '<br/><a href="javascript:history.back()">Go Back</a>';
$errorFound = "Please fix the following:<br>";

$email = $_POST['email'];
$password = $_POST['password'];
$data = $_POST;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$login = new Login($email, $password);
$loginValidation = new LoginValidation();

if(isset($_POST['submit'])){
  if (!$loginValidation->doLoginValidation() ){
$login->doLogin();
}
else {
  /*In case redirect doesn't work*/
  echo $errorFound;
  echo $loginValidation->showError;
  echo $goback;
}
}



?>
