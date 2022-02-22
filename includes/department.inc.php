<?php
include 'class-autoload.inc.php';
session_start();

if(!isset($_POST['submit'])){
  header("Location: /department.php");
}

$title = $_POST['title'];
$entertext = $_POST['entertext'];
$file = $_FILES['file'];
$author = $_SESSION['name'];

$department = new Department($title, $entertext, $file, $telephone);

if (isset($_POST['submit']) && !$department->departmentValidation() ) {
$department->uploadImage();
$department->newDepartmentPost();
}
