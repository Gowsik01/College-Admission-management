<?php

$mail="";
$subject="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $mail=$_POST['mail'];
    $subject=$_POST['subject'];
     
     
      


  $con=mysqli_connect("localhost","root","","clgmanagement");
    $query="select * from response";
    $res=mysqli_query($con,$query);

    if(mysqli_num_rows($res)>=0){
   
    $query="INSERT INTO response(Mail,Subject) values('$mail','$subject')";
    $res=mysqli_query($con,$query);
    
  
}else{
  
}
}?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Responsive Contact Section</h2>
<p>Joy College Of Engineering And Technology</p>
<p>Phone Number:7485327865</p>

  </div>
  <div class="row">
    <div class="column">
      <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201909/contact-details-3381225_1280.jpeg?524JGkJvIBQ1imnKfpn2djsEHFX06JK7&size=770:433.jpg" style="width:100%">
    </div>
    <div class="column">
      <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="fname">Email ID</label>
        <input type="Email" id="mail" name="mail" placeholder="Your mail.."
         required>
        <br>
        
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" onclick="myFunction()" value="Submit">
        <script>
         function myFunction() {
              alert("Ur Response has been received");
             }
</script>
      </form><br>
      <br>
      <form action="admission.php">
        <input type="submit" value="Back" >
      </form>
    </div>
  </div>
</div>

</body>
</html>
