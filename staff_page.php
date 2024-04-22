<?php
session_start();
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <meta name="viewport" content="width=device-width"> 
        <title>Staff Page | CK Creative Co</title>
         <link rel="stylesheet" href="styles.css"> 
         <style> 
         .button-section { display: flex; justify-content: center; gap: 20px; padding: 40px 0; } 
         .widget-button { flex: 1; max-width: 300px; padding: 20px; font-size: 24px; text-align: center; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; } 
         .widget-button:hover { background-color: #45a049; } 
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
            <h1>Staff Page</h1>
            <p>View New Clients with Dashboard | Update Status with Client Update</p>
            </div>
            </section>

    
        <!--------Introduction---------->
        <!-- Buttons for Customer and Staff -->
        <section class="button-section">
            <a href="staff_dashboard.php" class="widget-button">Admin Dashboard</a>
            <a href="staff_client_upd.php" class="widget-button">Client Update</a>
        </section>
    
        <!--------Footer-------->
        <section class="footer">
            <h4>Contact Us</h4>
            <p>+44(0) 79123 45678 <br> _instagram icon_ ckcreative.co <br> _facebook icon_ CK Creative Co <br> _tiktok icon_ ckcreative.co <br> _email icon_ ckcreative.co@gmail.com <br> Based in London, UK </p>
            <!--<div class ="icons"> </div>-->
        </section>
    </body>
</html>