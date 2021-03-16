<?php

$password="";
$pswrepeat="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$password = $_POST['psw'];
$pswrepeat = $_POST['psw-repeat'];
if ($password != $pswrepeat) {
   echo '<script>alert("Enter the correct Password")</script>';  
}else{
  echo '<script>alert("Successful")</script>';
}
  $con=mysqli_connect("localhost","root","","clgmanagement");
    $query="select * from login";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>0){
    $email=$_POST['email'];
    $query="INSERT INTO login(email,password) values('$email','$password')";
    $res=mysqli_query($con,$query);
  
}else{
  echo"Table created sucessfuly";
}
}?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 20%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>
    

    <div class="clearfix">
      <form action="login.php">
      <button type="submit" class="signupbtn">Sign UP</button>
    </form>
    <form action="login.php">
      <button type="submit" class="cancelbtn">Cancel</button>
    </form>
    </div>
  </div>
</form>

</body>
</html>
