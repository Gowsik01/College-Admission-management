<?php

$mail = $_POST['email'];
//echo $password;
//echo $email;

  $con=mysqli_connect("localhost","root","","clgmanagement");
    $query="Update studentdetails SET status='accepted' where mail='".$mail."'";
   
    if(mysqli_query($con,$query))
    {
      $body="This is your OTP for Covid E-pass Login.\n\r Thank You ";
      
     

                 if(mail($mail,$body,"From:kanagagowsik2001@gmail.com"))
                 {
                   echo $mail;
                  
                

                 }
                else
                 {
                  echo '<script>alert("OTP Unsuccessfull")</script>';
                  echo $mail;
                  
                
     }
 }
  


?>
