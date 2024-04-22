<?php
// Database connection details
$hostName = "localhost"; 
$dbUser = "root"; 
$dbPassword = ""; 
$dbName = "client_form";

// Establishing connection
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


require_once 'send_emails.php';


?>

