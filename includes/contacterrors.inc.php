<?php
$pathUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($pathUrl, "name=empty") == true) {
  echo 'Name is empty.';
}
elseif (strpos($pathUrl, "name=invalid") == true) {
  echo 'Name invalid, only letters allowed. Must be more than 2 characters.';
}
elseif (strpos($pathUrl, "email=empty") == true) {
  echo 'Email is empty.';
}
elseif (strpos($pathUrl, "email=invalid") == true) {
  echo 'Please enter a valid email.';
}
elseif (strpos($pathUrl, "city=empty") == true) {
  echo 'City is required.';
}
elseif (strpos($pathUrl, "gender=empty") == true) {
  echo 'Gender is required';
}
elseif (strpos($pathUrl, "textarea=empty") == true) {
  echo 'Text area can not be empty';
}
elseif (strpos($pathUrl, "submit=success") == true) {
  echo 'Contact form successfully sent!';
}
elseif (strpos($pathUrl, "submit=failed") == true) {
  echo 'Something went wrong.';
}
?>
