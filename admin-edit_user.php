<?php
require 'includes/class-autoload.inc.php';
session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../login.php');
}

	  $connection = new DBConnection();
		$usersClass = new Users();
		$usersClass->fetchUserID();
?>
<!DOCTYPE html>
<html>

<head>
<title>Medical Clinic - Admin Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style600.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link rel="icon" type="image/png" href="img/logom.png" />
</head>

<body>

<div class="content">

<div class="header">
        <a href="index.php"><img src="img/logom.png" width="50px" height="50px"></a>

        <?php if(isset($_SESSION['name'])): ?>
        <p>Welcome, <?php echo $_SESSION['name'];?>
        <?php if($_SESSION['user_type'] == "admin" ): ?>
            <a href="admin.php">(Admin Panel)</a>
        <?php endif; ?>
        / <a href="logout.php">Logout</a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> / <a href="signup.php">Sign up</a></p>
    <?php endif; ?>

    </div>

    <div class="headermenu" id="headermenuid">
        <ul>
        <li id="icon"><a id="menuhref" href="javascript:void(0);" onclick="menu()">
        <i class="fa fa-bars"></i>
        </a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="department.php">Departments</a></li>
        </ul>
    </div>

    <div class="maincontainer">
        <h1 style="text-align: center">Edit User</h1>
        <div style="margin: 0 auto;">
					<form action="<?php $usersClass->editUser();?>" method="post">
							<input type="text" name="name" value="<?php echo $usersClass->user['name']; ?>" placeholder="Enter your name"><br>
							<input type="text" name="email" value="<?php echo $usersClass->user['email']; ?>" placeholder="Enter your email"><br>
							<p>User type: <?php echo ucwords($usersClass->user['user_type']);?> </p>
							<label>Change user type:</label><br>
              <input type="radio" id="user_type" name="user_type" value="normal">
              <label for="normal">Normal</label><br>
              <input type="radio" id="user_type" name="user_type" value="admin">
              <label for="admin">Admin</label><br><br>
							<input id="button" type="submit" name="submit" value="Submit">
					</form>
			</div>


</div>
    </div>
    <?php include 'footer.php'?>
