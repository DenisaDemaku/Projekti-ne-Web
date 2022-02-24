<?php
$pathUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($pathUrl, "title=empty") == true) {
  echo 'Title is empty';
}
elseif (strpos($pathUrl, "entertext=empty") == true) {
  echo 'Text area is empty';
}
elseif (strpos($pathUrl, "file=error") == true) {
  echo 'There was an error uploading your image.';
}
elseif (strpos($pathUrl, "file=big") == true) {
  echo 'Your file is too big.';
}
elseif (strpos($pathUrl, "submit=success") == true) {
  echo 'Department post posted succesfully.';
}
elseif (strpos($pathUrl, "submit=failed") == true) {
  echo 'Department post could not be posted succesfully.';
}
?>
