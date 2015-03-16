<?php
// Start the session
session_start();
//Set the session variables
$_SESSION["fname"] = $_POST["fname"];
$_SESSION["lname"] = $_POST["lname"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["phone"] = $_POST["phone"];
//forward to a specific page
header('Location: 1.html');
?>