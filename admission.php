<?php
$name="";
$fname="";
$mnumber="";
$mail="";
$birthday="";
$address="";
$gender="";
$sname="";
$ten="";
$twelve="";
$cutoff="";
$dept="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $mail=$_POST['mail'];
    $name=$_POST['name'];
     $fname=$_POST['Fname'];
      $mnumber=$_POST['mnumber'];
      $birthday=$_POST['birthday'];
      $address=$_POST['address'];
      $gender=$_POST['gender'];
      $sname=$_POST['sname'];
      $ten=$_POST['ten'];
      $twelve=$_POST['twelve'];
      $cutoff=$_POST['cutoff'];
     $cour=$_POST['course'];
     $dept="";
     $c="";
     foreach ($cour as $c1) {
         $dept.=$c1.",";
     }
    $status="waiting";
      


  $con=mysqli_connect("localhost","root","","clgmanagement");
    $query="select * from studentdetails";
    $res=mysqli_query($con,$query);

    if(mysqli_num_rows($res)>=0){
   
    $query="INSERT INTO studentdetails(name,mail,fathersname,mobno,dob,address,gender,sname,10mark,12mark,cutoff,department,status) values('$name','$mail','$fname','$mnumber','$birthday','$address','$gender','$sname','$ten','$twelve','$cutoff','$dept','$status')";
    $res=mysqli_query($con,$query);
    
  
}else{
  
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
  background-color: coral;
}

* {
  box-sizing: border-box;

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
  right:0;
  margin: 20px;
  max-width: 600px;
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
  width: 20%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="firstpage.php">Home</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>



<div class="bg-img">
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="container">
    <h1>Fill details</h1>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required><br>

    <label for="psw"><b>Mail</b></label>
    <input type="text" placeholder="Enter Mail" name="mail" required><br>

    <label for="psw"><b>Father's name</b></label>
    <input type="text" placeholder="Enter father's name" name="Fname" required><br>

    <label for="psw"><b>Mobile number</b></label>
    <input type="text" placeholder="Enter Number" name="mnumber" required><br><br>
    
  <label for="psw"><b>DOB:</b></label>
  <input type="date" id="birthday" name="birthday"><br><br>


    <label for="psw"><b>Address</b></label>
    <textarea type="text" placeholder="Enter Address" name="address" required></textarea>
    <br>
    <br>
  <label for="psw"><b>Gender</b></label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br><br><br>

  <label for="name"><b> School Name</b></label>
    <input type="text" placeholder="Enter School Name" name="sname" required>
    <label for="name"><b> Enter 10th mark</b></label><br>
    <input type="text" placeholder="Enter 10th mark" name="ten" required>
    <label for="name"><b> Enter 12th mark</b></label><br>
    <input type="text" placeholder="Enter 12th mark" name="twelve" required>
    <label for="name"><b> 12th cutoff</b></label><br>
    <input type="text" placeholder="Cutoff" name="cutoff" required>

   <label for="course" ><b> Department</b></label><br>
  <input type="checkbox" id="course1" name="course[]" value="It">
  <label for="vehicle1"> Information Technology</label><br>
  <input type="checkbox" id="course2"  name="course[]" value="mech">
  <label for="vehicle2"> Mechanical</label><br>
  <input type="checkbox" id="course3" name="course[]" value="Cs">
  <label for="vehicle3"> Computer Science</label><br><br>

    <button type="submit" class="btn">Submit</button>
    <a href="firstpage.php"> Back</a>
    
    
  </form>

  
</div>


</body>
</html>
