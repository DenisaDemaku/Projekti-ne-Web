<?php
$pathUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($pathUrl, "name=empty") == true) {
  echo 'Name is empty.';
}
elseif (strpos($pathUrl, "name=invalid") == true) {
  echo 'Name invalid, only letters allowed. Must be more than 2 characters.';
}
elseif (strpos($pathUrl, "email=empty") == true) {
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
elseif (strpos($pathUrl, "confirmpass=empty") == true) {
  echo 'Confirm password is empty';
}
elseif (strpos($pathUrl, "confirmpass=invalid") == true) {
  echo 'Passwords do not match';
}
elseif (strpos($pathUrl, "submit=success") == true) {
  echo 'Account successfully created!';
}
elseif (strpos($pathUrl, "submit=failed") == true) {
  echo 'Something went wrong.';
}
elseif (strpos($pathUrl, "submit=exists") == true) {
  echo 'User already exists. This email is already in the database.';
}
?>
