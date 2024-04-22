<?php
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

// Check if the name and stage parameters are provided
if (isset($_GET['name']) && isset($_GET['stage'])) {
    $name = $_GET['name'];
    $stage = $_GET['stage'];

    // Update the stage in the database for the specific customer
    $sql = "UPDATE customer_signup SET stage = $stage WHERE name = '$name'";
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the staff client update page
        header("Location: staff_client_upd.php");
        exit();
    } else {
        echo "Error updating stage: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>