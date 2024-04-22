<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content="with=device-width">
        <title> Services | CK Creative Co</title>
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
            <h1>Services</h1>
            <p>Need a different service? Contact Us</p>
            <a href="client_form_page.php" class="header-btn">Contact us to find out more</a>
        </div>
    </section>

     <!--------Goals Columns---------->

     <section class="goals">
        <h1>The Goals of Our Services</h1>
        <p>CK Creative Co. is committed to meeting these goals with every client. </p>
        <div class="row">
            <div class = "goals-col">
                <h3>Plan</h3>
                <p>The planning phase is a crucial stage in any graphic design project, as it lays the foundation for the entire creative process. During this phase, the designer collaborates closely with the client to gain a deep understanding of their goals, target audience, and desired outcomes. Through a series of discussions and brainstorming sessions, the designer gathers valuable insights into the client's brand identity, messaging, and aesthetic preferences. This information is then used to develop a comprehensive design brief that outlines the project's scope, timeline, and deliverables. The designer also conducts extensive research to identify current design trends, competitor analysis, and potential inspiration sources. </p>
                </div>

             <div class = "goals-col">   
                <h3>Design</h3>
                <p>The design phase is a critical stage in a graphic design project where the initial concepts and ideas from the planning phase are transformed into tangible visual solutions. During this phase, the designer takes the insights gathered from the client, the design brief, and the research conducted, and begins to develop a range of design concepts that align with the project's objectives. The designer experiments with various visual elements such as color schemes, typography, imagery, and composition to create designs that effectively communicate the intended message and evoke the desired emotional response from the target audience. This phase often involves the creation of multiple design iterations, each exploring different creative directions and design techniques. </p>
                </div>

                <div class = "goals-col"> 
                <h3>Reach</h3>
                <p>
Our graphic design services have the power to help you reach more customers and effectively communicate your brand message. In today's visually-driven world, compelling graphic designs play a crucial role in capturing the attention of your target audience and leaving a lasting impression. Our team of skilled designers understands the importance of creating visually appealing and memorable designs that resonate with your customers. By leveraging the latest design trends, color psychology, and composition techniques, we craft designs that not only aesthetically pleasing but also strategically aligned with your brand identity and marketing goals. Whether it's through eye-catching logos, captivating social media graphics </p>
                 </div>

                </section>

            </div>

     <!--------Service List---------->
             <section class = "services_rendered">
                    <h1>Services</h3>
                    <h2> Logos  |   Marketing  |  Flyers  |   Analytics  |   Web Design  |   Cover Art  |  Podcast  |  Creative</h2>
                    <a href="portfolio.html" class="services-btn">View Our Work</a>
                </section>

      <!--------Foooter-------->

      <section class = "footer">
        <h4>Contact Us</h4>
        <p>+44(0) 79123 45678 <br> *instagram icon* ckcreative.co <br> *facebook icon* CK Creative Co <br> *tiktok icon* ckcreative.co <br> *email icon* ckcreative.co@gmail.com <br> Based in London, UK </p>
         <!--<div class ="icons"> </div>-->

    </section>



  </body>
</html>