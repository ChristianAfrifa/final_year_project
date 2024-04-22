<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="with=device-width">
        <title> Contact | CK Creative Co</title>
        <link rel="stylesheet" href="styles.css">
        
    </head>
    <body>
    <section class= "header">
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

        <div class= "header-text">
            <h1>Contact Us</h1>
            <p>Use the details below to reach us.</p>
        </div>
    </section>

    <!--------Introduction---------->

    <section class= "introsec">
        <h1>Email</h1>
        <!---Line Under-->
        <h2> ckdesigns.uk@gmail.com</h2>
        <h2> 079123 45678
        <h2> 123 Number Lane, London, SE1 2AB
        <br>
        <br>
        <br>
        <br>
        <br>
    </section>

   

    <section class = "footer">
        <h4>Contact Us</h4>
        <p>+44(0) 79123 45678 <br> *instagram icon* ckcreative.co <br> *facebook icon* CK Creative Co <br> *tiktok icon* ckcreative.co <br> *email icon* ckcreative.co@gmail.com <br> Based in London, UK </p>
         <!--<div class ="icons"> </div>-->

    </section>
    

    </body>





</html>
