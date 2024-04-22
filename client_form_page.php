<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    header("Location: customer_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Client Form | CK Creative Co</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Add other CSS files if needed -->
</head>
<body>
  
<section class="header">
        <nav>
            <a href="homepage.html"><img src="images/logo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <?php if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']): ?>
                        <li><a href="client_form_page.php">CLIENT FORM</a></li>
                        <li><a href="login.php">LOG IN</a></li>
                    <?php else: ?>
                        <li><a href="logout.php">LOG OUT</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div class="header-text">
            <h1>Client Form</h1>
            <p>Help us understand you to help you.</p>
            <a href="" class="header-btn">Contact us to find out more</a>
        </div>
    </section>
</section>

<section class="form-section">
        <?php
        // Database connection parameters
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

        // ...
        
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $service = mysqli_real_escape_string($conn, $_POST['service']);
            $description = mysqli_real_escape_string($conn, $_POST['description']);
        
            // Validate form fields
            $errors = array();
            if (empty($name)) {
                $errors[] = "Name is required";
            }
            if (empty($email)) {
                $errors[] = "Email is required";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
            }
            if (empty($phone)) {
                $errors[] = "Phone number is required";
            } elseif (!preg_match("/^[0-9]{11}$/", $phone)) {
                $errors[] = "Phone number should contain exactly 11 digits";
            }
            if (empty($service)) {
                $errors[] = "Type of service is required";
            }
            if (empty($description)) {
                $errors[] = "Description is required";
            }
        
            if (empty($errors)) {
                // Insert data into database
                $sql = "INSERT INTO client_responses (name, email, phone, service, description) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, $service, $description);
                if (mysqli_stmt_execute($stmt)) {
                    echo "Submitted Successfully! We will be in contact with you via email";
                } else {
                    echo "Error: " . mysqli_stmt_error($stmt);
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "<ul class='error-list'>";
                foreach ($errors as $error) {
                    echo "<li class='error-message'>$error</li>";
                }
                echo "</ul>";
            }
        }
        ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Please Fill Out All Fields</h2>
        <section>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </section>
        <section>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </section>
        <section>
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
        </section>
        <section>
            <label for="service">Type of Service Needed:</label>
            <input type="text" id="service" name="service" required>
        </section>
        <section>
            <label for="description">Description of Service Needed:</label>
            <textarea id="description" name="description" required></textarea>
        </section>
        <input type="submit" value="Submit">
    </form>
</section>
  
<section class = "footer">
        <h4>Contact Us</h4>
        <p>+44(0) 79123 45678 <br> *instagram icon* ckcreative.co <br> *facebook icon* CK Creative Co <br> *tiktok icon* ckcreative.co <br> *email icon* ckcreative.co@gmail.com <br> Based in London, UK </p>
         <!--<div class ="icons"> </div>-->
</section>

</body>
</html>