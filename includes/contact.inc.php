<?php
include 'class-autoload.inc.php';
session_start();


$goback = '<br/><a href="javascript:history.back()">Go Back</a>';
$errorFound = "Please fix the following:<br>";

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];

$gender = $_POST['gender'];
$entertext = $_POST['entertext'];
$data = $_POST;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$contact = new Contact($name, $email, $city, $gender, $entertext);
$contactValidation = new ContactValidation();

if(isset($_POST['submit'])){

  if (!$contactValidation->doContactValidation() ){
    $contact->doContact();
  }
  else {
  /*In case redirect doesn't work*/
    echo $errorFound;
    echo $contactValidation->showError;
    echo $goback;
  }
}

if(!isset($_POST['submit'])){
  header("Location: /");
}

?>
