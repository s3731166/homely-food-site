<?php
    session_start();
    include '../nav-header.php';
    $nameErr = $emailErr = $addressErr = $phoneErr = $cardErr = $expErr = ""; 
    $name = $email = $address = $phone = $creditCard = $expiry  =""; 
    $valid = true;
    if(isset($_POST["finalCheckout"])){
      
      $name = $_POST["name"];
      $email = $_POST["email"];
      $address = $_POST["address"];
      $phone = $_POST["phone"];
      $creditCard = $_POST["creditCard"];
      $expiry = $_POST["expiry"];
          
      if(empty($_POST["name"])){
        $nameErr = "<p id='error'> Please enter your name</p>";
       $valid = true;
      }
       else if(!preg_match("/^([a-zA-Z \-\.\,\']+)$/",$name))
       {
        $nameErr = "<p id = 'error'>Only alphabetic letters, spaces, full stops, commas, single quotes and hyphens are allowed</p>";
       $valid = true;
      }
      
       if(empty($_POST["email"])){
        $emailErr = "<p id='error'> Please enter an email</p>";
        $valid = true;
      } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "<p id = 'error'> Invalid email format</p>";
         $valid = true;
      }
      
      if(empty($_POST["address"])){
        $addressErr = "<p id='error'> Please enter your address</p>";
        $valid = true;
      }
      else if(!preg_match("/^([0-9]{1,}[a-zA-Z \-\.\,\'\/\d\n]+)$/",$address)){
        $addressErr = "<p id='error'>Invalid address</p>";
     $valid = true;
      }
      
      if(empty($_POST["phone"])){
        $phoneErr = "<p id='error'> Please enter your phone number</p>";
   $valid = true;
      }
      else if(!preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/",$phone)){
        $phoneErr = "<p id='error'> Invalid Australian phone number</p>";
   $valid = true;
      }
      
      if(empty($_POST["creditCard"])){
        $cardErr = "<p id='error'> Please enter your credit card number</p>";
      $valid = true;
      }else if(!preg_match("/^[\d ]{12,19}$/",$creditCard)){
        $cardErr = "<p id='error'> Invalid credit card number </p>";
      $valid = true;
      }
     if(!preg_match("/^(20) ([1]{1}[8-9]{1}|[2]{1}[0-3]{1}) [- \.](0[1-9]|1[012])$/",$expiry)){
         $dateErr = "<p id='error'> Invalid Date (Card Expires After 3 Years) </p>";
        
      }

      
      
    }
    
 ?>
  <p class="productTitles">Checkout</p>  

  <form method = "post" action=<?php 
           if($valid){
             echo "receit.php";  }                           
           ?>>

           
    <div class = "checkoutForm">
    <p>Name:</p> <input type="text" name="name" value= "<?php echo $name; ?>" > <?php echo $nameErr;?>
   <p>Email:</p><input type="email" name="email" value = "<?php echo $email; ?>" ><?php echo $emailErr;?>
   <p>Address</p><input type="text area" name="address" value = "<?php echo $address; ?>" ><?php echo $addressErr;?>
   <p>Mobile Phone:</p><input type="text" name="phone" value = "<?php echo $phone; ?>" ><?php echo $phoneErr;?>
   <p>Credit Card</p><input type="text" name="creditCard" value = "<?php echo $creditCard; ?>" onchange="visaCheck(creditCard)" >
    <?php echo $cardErr;?><img id="visaImage" width=20px; src="media/blank-card.png.png">
   <p>Expiry Date</p><input type="date" name="expiry" value="<?php echo $expiry; ?>" ><br/>
       
 

    <input type="submit" name="finalCheckout">
    <?php echo $_SESSION["total"] ?>
    </div>
   
</form>
</body>
</html>