<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login | CK Creative Co</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <section class="header">
        <nav>
            <a href="homepage.php"><img src="images/logo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="client_form_page.php">CLIENT FORM</a></li>
                    <li><a href="login.php">LOG IN</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h2>Client Login</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <div class="forgot-password">
                <a href="contact.php">Forgot Password?</a>
            </div>
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
                $username = mysqli_real_escape_string($conn, $_POST["username"]);
                $password = mysqli_real_escape_string($conn, $_POST["password"]);

                // Prepare and execute the SQL query
                $sql = "SELECT * FROM customer_signup WHERE username = ? AND password = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $username, $password);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    // Login successful
                    $row = $result->fetch_assoc();
                    $_SESSION['customer_id'] = $row['id'];
                    $_SESSION['customer_name'] = $row['name'];
                    $_SESSION['customer_organization'] = $row['organization'];
                    $_SESSION['logged_in'] = true; // Add this line to set the logged_in flag
                    // Redirect to customer_dashboard.php
                    header("Location: customer_dashboard.php");
                    exit();
                } else {
                    // Login failed
                    echo "Invalid username or password.";
                }
                $stmt->close();
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </section>
</body>
</html>