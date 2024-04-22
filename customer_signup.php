<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Sign Up| CK Creative Co</title>
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
        input[type="text"], input[type="password"], input[type="email"] {
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
        .error {
            color: red;
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
        <h2>Client Sign Up</h2>
        <form action="process_signup.php" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="organisation">Organisation</label>
            <input type="text" id="organisation" name="organisation" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Register</button>
        </form>
    </div>
    </section>
</body>
</html>