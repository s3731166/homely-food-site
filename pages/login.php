
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="../js/script.js"></script>

    <title>Homely Food</title>
</head>
<body>
    <div class="bg">

    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="about.html"> About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="how-it-works.html">How We Work</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="login.html">Log In</a></li>
        </ul>
       
    </nav>
        <main>
        <section id="login">

            <h1>Member Log In</h1>


            <div class="container">
                
                <form action="validation.php" method="post">
Email: <input type="text" name="username" required>
<br />
Password: <input type="password" name="password" required>
<br />
<input type="submit" name="submitBtn" value="Login">
                 

                    <label>Don't have an account? </label>
                    <a title="register" href="register.php">Register</a>
                </form>
            </div>
            


        </section>
        </main>
    </div>
</body>
</html>