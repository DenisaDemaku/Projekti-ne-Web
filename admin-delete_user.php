<?php
require 'includes/class-autoload.inc.php';
session_start();

$adminCheck = new AdminCheck();
if (!$adminCheck->isAdmin()) {
	header('location: ../login.php');
}

else{
    $connection = new DBConnection();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $query = "DELETE FROM users WHERE id= :id";
    $query = $connection->getConnection()->prepare($query);
    $query->execute(['id' => $id]);

    header("Location: admin-users.php");
}
