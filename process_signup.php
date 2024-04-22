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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $organisation = $_POST["organisation"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO customer_signup (name, organisation, email, username, password)
            VALUES ('$name', '$organisation', '$email', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to customer_login.php
        header("Location: signupconf.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>