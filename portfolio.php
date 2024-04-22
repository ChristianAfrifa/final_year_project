<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="with=device-width">
        <title> Portfolio | CK Creative Co</title>
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
            <h1>Portfolio</h1>
            <p>Contact Us Today!</p>
            <a href="client_form_page.php" class="header-btn">Contact us to find out more</a>
        </div>
    </section>
     <!--------Portfolio Section-------->
     <section>
       <div id="portfolio"></div>
         <h1 class="portfolio-title">My Work</h1>
         <div class="work-list">
            <div class="work">
                <img src="port_logos/port1.jpg">
             </div>
             <div class="work">
                <img src="port_logos/port2.jpg">
             </div>
             <div class="work">
                <img src="port_logos/port3.png">
             </div>
             <div class="work">
                <img src="port_logos/port4.jpg">
             </div>
             <div class="work">
                <img src="port_logos/port5.jpg">
             </div>
             <div class="work">
                <img src="port_logos/port6.png">
             </div>
             <div class="work">
                <img src="port_logos/port6.jpg">
             </div>
             <div class="work">
                <img src="port_logos/port7.jpg">
             </div>
         </div>

     </section>
     <!--------Link to Client Form Page-------->
     <section>
        <a href="client_form_page.php" class="portfolio-btn">Send us a message!</a>
    </section>

     <!--------Foooter-------->

     <section class = "footer">
        <h4>Contact Us</h4>
        <p>+44(0) 79123 45678 <br> *instagram icon* ckcreative.co <br> *facebook icon* CK Creative Co <br> *tiktok icon* ckcreative.co <br> *email icon* ckcreative.co@gmail.com <br> Based in London, UK </p>
         <!--<div class ="icons"> </div>-->

    </section>

  </body>
</html>