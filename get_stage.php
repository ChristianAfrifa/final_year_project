<?php
session_start();

// Check if the customer is logged in
if (!isset($_SESSION['customer_id'])) {
    exit();
}

// Get the customer's name from the session
$customerName = $_SESSION['customer_name'];

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client_form";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the stage for the specific customer
$sql = "SELECT stage FROM customer_signup WHERE name = '$customerName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stage = $row['stage'];
    echo "Stage $stage has commenced.";
} else {
    echo "";
}

// Close the database connection
$conn->close();
?>