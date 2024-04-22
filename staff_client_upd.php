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
    <title>Admin Client Update | CK Creative Co</title>
    <link rel="stylesheet" href="styles.css">
    <style>
         .dashboard-section { margin: 50px; } 
         .dashboard-table { width: 100%; border-collapse: collapse; margin: 0 auto; }
          .dashboard-table th, 
          .dashboard-table td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; } 
          .dashboard-table th { background-color: #f4f4f4; font-weight: bold; } 
          .button-section { text-align: center; }
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
            <h1>Admin Client Update</h1>
            <h2>Stage 1 is Planning Stage, Stage 2 is Design Phase, Stage 3 is Alteration, Stage 4 is Project Complete</h2>
            <a href="staff_dashboard.php" class="header-btn">Staff Dashboard</a>
        </div>
    </section>

    <section class="dashboard-section">
        <div class="staff_dash">
            <main class="main-content">
                <table class="dashboard-table">
                    <tr>
                        <th>Name</th>
                        <th>Organisation</th>
                        <th>Actions</th>
                    </tr>
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

                    // Retrieve data from the database
                    $sql = "SELECT name, organisation FROM customer_signup";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["organisation"] . "</td>";
                            echo "<td class='button-section'>";
                            echo "<button onclick='updateStage(\"" . $row["name"] . "\", 1)'>Stage 1</button>";
                            echo "<button onclick='updateStage(\"" . $row["name"] . "\", 2)'>Stage 2</button>";
                            echo "<button onclick='updateStage(\"" . $row["name"] . "\", 3)'>Stage 3</button>";
                            echo "<button onclick='updateStage(\"" . $row["name"] . "\", 4)'>Stage 4</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No clients found.</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
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
            _email icon_ ckcreative.co<
            <p>
                </section>
                </html>