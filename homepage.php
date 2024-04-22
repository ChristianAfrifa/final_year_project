<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="with=device-width">
        <title> Homepage | CK Creative Co</title>
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
            <h1>Welcome to the World of CK Creative Co.</h1>
            <p>Creating your brand and marketing material has now become one of the easiest things to do in the world.</p>
            <a href="client_form_page.php" class="header-btn">Contact us to find out more</a>
        </div>
    </section>

    <!--------Introduction---------->

    <section class= "introsec">
        <h1>What is CK Creative Co?</h1>
        <!---Line Under-->
        <p>CK Creative Co. is a digital marketing agency that specialises in supporting businesses <br> with their graphic design, marketing assets and data analytics. <br>
            The goal of CK Creative Co. is to help business establish their presence in a highly <br> competitive market. We believe strongly that having a strong brand and marketing, <br> business will be able to do this.</p>

    </section>

    <!----------Collaborations------->
    <section class= "collabs">
        <h1>Brand Collaborations</h1>

        <!--List of Logos designed-->
    </section>

    <!---------Meet Section-------->
    <section class = "ckdesigns">
        <h1>Meet CK, The Designer</h1>
        <p>Christian Kwame, CK, is a London-based graphic designer, who <br> is also currently a student at Aston University. CK started <br> designing in 2019 and has been constantly striving and <br> designing since then. 

            Worked with brands such as Aston ACS, Aston Christian Union, <br> Drip Gem Events, Steady Ents etc.</p>
       <!----Section for CK Photo----->
    </section>

    <!--------Foooter-------->

    <section class = "footer">
        <h4>Contact Us</h4>
        <p>+44(0) 79123 45678 <br> *instagram icon* ckcreative.co <br> *facebook icon* CK Creative Co <br> *tiktok icon* ckcreative.co <br> *email icon* ckcreative.co@gmail.com <br> Based in London, UK </p>
         <!--<div class ="icons"> </div>-->

    </section>
    

    </body>





</html>


































</html>