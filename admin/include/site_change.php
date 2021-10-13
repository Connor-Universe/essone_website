<?php
include("../../include/config.php");
date_default_timezone_set('Etc/UTC');




   
   
    



if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $phone2= $_POST['phone'];
  $location2 = $_POST['location'];
 
  $email2 = $_POST['email'];
 
  $btc_address = $_POST['wallet'];



  
  
 
  
  
       
        
      
         
         
        $update_user = "UPDATE settings SET  location2 ='$location2',  phone ='$phone2' ,email = '$email2' , wallet= '$btc_address'";
        $run_user = mysqli_query($connect,$update_user);
        
}




  

  




        
  

?>