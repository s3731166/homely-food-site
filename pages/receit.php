<?php
  session_start();

    

function body(){
$html=<<<"OUTPUT"
  <div>
    <h2> Product Summary<br><br></h2>
    <h1>Name:</h1>
   
   <p>  $_POST[name]</p>;
     
  
      <hr>
      <h1>Email:</h1>
      
   <p>  $_POST[email]</p>;
     
    
        <hr>
        <h1> Address:</h1>
        
  <p>  $_POST[address]</p>;
     

          <hr>
          <h1>Mobile Phone: </h1>
         
   <p>  $_POST[phone]</p>;
    
            <hr>
            <h1> Total:</h1>
        
            <p>   $_SESSION[total]</p>;
               
          
                    <hr>
      
OUTPUT;
echo $html;
}
?>



  <?php
      include '../nav-header.php';

body();
  
?>
        </main>
    </body>
</html>