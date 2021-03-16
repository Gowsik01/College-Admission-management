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
   
    
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="container">
  
  <br><br>
  
</form>
    <section> 
       
        <!-- TABLE CONSTRUCTION--> 
        <table> <h1>FEEDBACK</h1>
            <tr> 
                <th>Mail</th> 
                <th>SUbject</th> 
                
                
     
            </tr> 
            <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA 
                
            
                $con=mysqli_connect("localhost","root","","clgmanagement");
                $query="select * from response";
                $res=mysqli_query($con,$query);
                while($rows = mysqli_fetch_assoc($res)){
            
    
                
                 
                 
                            
                    


            echo "<tr>"; 
                
                echo "<td>".$rows['Mail']."</td>"; 
                echo "<td>".$rows['Subject']."</td>"; 
               

                
            
            
            echo "</tr>";
            }
                
                
            
             ?> 
              
        </table> 
        <form action="acpt.php"><input type='submit' value='Back'></form>
    </section> 
</body> 
  
</html> 