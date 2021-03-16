

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
     
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
        body {
              background-image: url('https://wallpaperaccess.com/full/1209458.jpg');
           }
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
        
    </style> 
</head> 
  
<body> 
    <h1>Welcome</h1>
    
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="container">
  
  <br><br>
  
</form>
    <section> 
        <h1>Admission forms</h1> 
        <h3><a href="response.php">Feedback</a></h3> 

  
  
</div>
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>Name</th> 
                <th>mail</th> 
                <th>father name</th> 
                <th>Mobile number</th> 
                <th>DOB</th> 
                <th>Address</th> 
                <th>Gender</th> 
                <th>School Name</th>
                <th>Dept</th>
                <th>10th mark</th> 
                <th>12th mark</th>

                <th>cutoff</th> 
                
     
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA 
                
            
                $con=mysqli_connect("localhost","root","","clgmanagement");
                $query="select * from studentdetails WHERE status='waiting'";
                $res=mysqli_query($con,$query);
                while($rows = mysqli_fetch_assoc($res)){
                $dept=$rows['department'];
    
                
                 
                 
                            
                    


            echo "<tr>"; 
                
                echo "<td>".$rows['name']."</td>"; 
                echo "<td>".$rows['mail']."</td>"; 
                echo "<td>".$rows['fathersname']."</td>"; 
                echo "<td>".$rows['mobno']."</td>"; 
                echo "<td>".$rows['dob']."</td>"; 
                echo "<td>".$rows['address']."</td>"; 
                echo "<td>".$rows['gender']."</td>"; 
                echo "<td>".$rows['sname']."</td>"; 
                echo "<td>".$rows['department']."</td>"; 
                echo "<td>".$rows['10mark']."</td>"; 
                echo "<td>".$rows['12mark']."</td>"; 
                echo "<td>".$rows['cutoff']."</td>"; 

                echo '<td><form action="req.php" method="POST">
                <input type="hidden" name="email" value='.$rows['mail'].'><input type="submit" value="Accept"></form></td>';
                echo '<td><form action="req1.php" method="POST">
                <input type="hidden" name="email" value='.$rows['mail'].'><input type="submit" value="Decline"></form></td>';
               

                
            
            
            echo "</tr>";
            }
                
                
            
             ?> 
              
        </table> 
    <form action='login.php'><input type='submit' value='Back'></form>
    </section> 
</body> 
  
</html> 