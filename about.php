<?php
//require 'includes/class-autoload.inc.php';
session_start();
//$about = new About();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Medical Clinic- About Us</title>
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
        <li id="active"><a href="about.php">About Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="department.php">Departments</a></li>
        </ul>
    </div>

    <div class="maincontainer">

    <h1 style="text-align: center;"><?php $about->AboutUsTitle(); ?></h1>
    <p><?php $about->AboutUsDesc1(); ?></p>
    <p><?php $about->AboutUsDesc2(); ?></p>
    <br/>
    <img id="aboutphoto" src="img/aboutphoto.jpg">
    <br/>
    <p><?php $about->AboutUsDesc3(); ?></p>
    <p><?php $about->AboutUsDesc4(); ?></p>
    </div>

</div>

<?php include 'footer.php'?>


