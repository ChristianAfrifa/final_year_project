<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Redirect to the login page if not logged in
    header("Location: staff_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Admin Dashboard | CK Creative Co</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .dashboard-section { margin: 50px; }
        .dashboard-table { width: 100%; border-collapse: collapse; position: relative; margin: 0 auto;}
        .dashboard-table th,
        .dashboard-table td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        .dashboard-table th { background-color: #f4f4f4; font-weight: bold; }
    </style>
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
            <h1>Admin Dashboard</h1>
            <p>Welcome to Admin dashboard.</p>
            <a href="staff_client_upd.php" class="header-btn">Admin Client Update</a>
        </div>
    </section>

    <section class="dashboard-section">
        <div class="admin_dash">
            <main class="main-content">
                <table class="dashboard-table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Type of Service Needed</th>
                        <th>Description of Service Needed</th>
                    </tr>
                    <?php
                    // Database connection
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
                    $sql = "SELECT * FROM client_responses";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['service'] . "</td>";
                            echo "<td>" . $row['description'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data available</td></tr>";
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                </table>
            </main>
        </div>
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
</body>
</html>