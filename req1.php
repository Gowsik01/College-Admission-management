<?php

$email = $_POST['email'];
//echo $password;
//echo $email;

  $con=mysqli_connect("localhost","root","","clgmanagement");
    $query="Update studentdetails SET status='Declined' where mail='".$email."'";
    echo $query;
    if(mysqli_query($con,$query)){
      header("location:acpt.php");
      }
   


?>
