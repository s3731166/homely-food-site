<?php


session_start();

$con = mysqli_connect('localhost','root','');// Database , user, pass
    
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
include '../nav-header.php';
?>

    <div class="bg">

    
            <main>
                <section id="register">
                    <h1>Member Registration</h1>
                    <div id="container">

                        <div id="content">


                            <form action="register.php" method="post">
                                <label>First Name</label>
                                <input name="firstname" type="text" value="" id="firstname" />

                                <label>Email</label>
                                <input type="email" textmode="email" id="email" name="email"
                                    pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required>

                                <label>Home Address</label>
                                <input name="address" type="text" value="" id="address" />
                                <label>Password </label>
                                <input type="password" id="password" name="password" required>

                                <input type="radio" name="creditCheck" id="c01" value="1" checked />Sign up as Customer
                                <input type="radio" name="creditCheck" id="c02" value="2" />Sign up as Chef

                                <input type="radio" name="creditCheck" id="c02" value="3" />Sign up as Driver



                                <input type="submit" value="Submit" style="color:#3b1406; font-size: 25px; font-weight: bold; background-color: rgb(207, 114, 48);">
                                <label style="color:#3d1a03; font-size: 25px; font-weight: bold; text-align: left;">Already have an account? &nbsp;&nbsp;&nbsp; </label>
                                <a title="login" href="login.html" style="color:#0e033d; font-size: 25px; font-weight: bold; text-align: left;">Login</a>
                            </form>




                        </div><!-- close content -->

                    </div> <!-- close container -->




                </section>
            </main>
        
    </div>

<?php
    include '../footer.php';
?>
