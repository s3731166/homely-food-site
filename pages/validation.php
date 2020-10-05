<?php

session_start();


$con = mysqli_connect('localhost','root','1234'); // Database , user, pass
    
mysqli_select_db($con,'register'); //database name

$name = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

$s = "select * from usertable where email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num ==1) { 
$s = "select * from usertable where password = '$password'";
$result = mysqli_query($con, $s);
$count = mysqli_num_rows($result);


}

else{
    echo "Incorrect Username";
        header("Location: login.php");
}

if($count ==1) { 
    echo 'logged in';
    header("Location: menu.php");
}
else{
        header("Location: login.php");
}
?>