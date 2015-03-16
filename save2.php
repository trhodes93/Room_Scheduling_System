<?php
// Start the session
session_start();
//Set the session variables
$_SESSION["building"] = $_POST["building"];
$_SESSION["types"] = $_POST["types"];
$_SESSION["needroom"] = $_POST["needroom"];
$_SESSION["begintime"] = $_POST["begintime"];
$_SESSION["endtime"] = $_POST["endtime"];
//forward to a specific page
header('Location: display.php');
?>