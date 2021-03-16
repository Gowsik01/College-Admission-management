
<?php

$password="";
$pswrepeat="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$password = $_POST['psw'];
$email = $_POST['email'];
//echo $password;
//echo $email;

  $con=mysqli_connect("localhost","root","","clgmanagement");
    $query="select * from login";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
      while($row = mysqli_fetch_assoc($res))
      {
         if($email==$row['email'] && $password==$row['password']){
          header("location:acpt.php");
         
   }
   else{
          
          
}
      }
   

}
}?>






<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("http://stmlportal.net/images/staff.png");

  min-height: 400px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</form>
</head>
<body>

<div class="bg-img">
 
    
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="container">
  <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <h3>Do not have an account?</h3>
  <a href="signup.php">signup</a>
  <a href="firstpage.php">Back</a>
  </form>
  
</div>


</body>
</html>
