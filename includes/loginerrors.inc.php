<?php
$pathUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($pathUrl, "email=empty") == true) {
  echo 'Email is empty';
}
elseif (strpos($pathUrl, "email=invalid") == true) {
  echo 'Please write a valid email';
}
elseif (strpos($pathUrl, "password=empty") == true) {
  echo 'Password is empty';
}
elseif (strpos($pathUrl, "password=invalid") == true) {
  echo 'Password must have 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter.';
}
elseif (strpos($pathUrl, "submit=error") == true) {
  echo 'These credentials are not found in the database';
}
?>
