<?php


session_start();

$con = mysqli_connect('localhost','root','1234');// Database , user, pass
    
mysqli_select_db($con,'register'); //database name
$name = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

$s = "select * from usertable where email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num ==1) {
    echo "Account with this E-mail already exists!";
}
else{
    $reg= " insert into usertable(name, email, address, password) values('$name', '$email', '$address', '$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
    header("Location: login.php");
}

?>
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
       <main>
                <section id="register">
            <h1>Member Registration</h1>
            <div id="container">

                <div id="content">


                    <form action="register.php" method="post" >
                        <label>First Name</label>
    <input name="firstname" type="text" value="" id="firstname" />

                        <label>Email</label>
                        <input type="email" textmode="email" id="email" name="email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>
                        
                        <label>Home Address</label>
                        <input name="address" type="text" value="" id="address" />
                        <label>Password </label>
                        <input type="password" id="password" name="password" required>

                        <input type="radio" name="creditCheck" id="c01" value="1" checked/>Sign up as Customer
<input type="radio" name="creditCheck" id="c02" value="2" />Sign up as Chef
                      
<input type="radio" name="creditCheck" id="c02" value="3" />Sign up as Driver


                        <input type="submit" value="Submit">
                        <label>Already have an account? </label>
                        <a title="login" href="login.html">Login</a>
                    </form>




                </div><!-- close content -->

            </div> <!-- close container -->




        </section>
        </main>
    </nav>
    </div>
</body>
</html>