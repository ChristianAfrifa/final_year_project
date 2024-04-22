<?php
session_start();

// Check if the customer is logged in
if (!isset($_SESSION['customer_id'])) {
    // Redirect to the login page if not logged in
    header("Location: customer_login.php");
    exit();
}

// Get the customer's name and organization from the session
$customerName = $_SESSION['customer_name'];
$customerOrganization = $_SESSION['customer_organization'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard | CK Creative Co</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="homepage.php"><img src="images/logo.png"></a>
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
            <h1>Welcome, <?php echo $customerName; ?></h1>
            <p>Organization: <?php echo $customerOrganization; ?></p>
        </div>
    </section>

    <section class="dashboard-content">
        <div id="message"></div>
    </section>

    <section class="footer">
        <h4>Contact Us</h4>
        <p>
            +44(0) 79123 45678<br>
            _instagram icon_ ckcreative.co<br>
            _facebook icon_ CK Creative Co<br>
            _tiktok icon_ ckcreative.co<br>
            _email icon_ ckcreative.co@gmail.com<br>
            Based in London, UK
        </p>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function checkStage() {
            $.ajax({
                url: 'get_stage.php',
                method: 'GET',
                success: function(response) {
                    $('#message').html(response);
                }
            });
        }

        $(document).ready(function() {
            setInterval(checkStage, 5000); // Check stage every 5 seconds
        });
    </script>
</body>
</html>