<?php
  session_start();
    $database_name = "register";
    $con = mysqli_connect("localhost","root","",$database_name);
  include '../nav-header.php';

    

function body(){
$html=<<<"OUTPUT"
  <div><br><br><br><br><br><br><br><br> <h1>Thank You!!</h1><br><br>
    <h2> Product Summary:<br><br></h2>
    <h1>Name:</h1>
   
   <p>  $_POST[name]</p>
     
  
      <hr>
      <h1>Email:</h1>
      
   <p>  $_POST[email]</p>
     
    
        <hr>
        <h1> Address:</h1>
        
  <p>  $_POST[address]</p>
     

          <hr>
          <h1>Mobile Phone: </h1>
         
   <p>  $_POST[phone]</p>
    
            <hr>
            <h1> Total:</h1>
        
            <p>   $_SESSION[total]</p>
               
          
                    <hr>
     
OUTPUT;
echo $html;



}

 unset ($_SESSION["cart"]);
?>


  <?php
      include '../nav-header.php';

body();
  
?>
        
        <?php
    include '../footer.php';
?>
