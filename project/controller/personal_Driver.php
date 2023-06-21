<?php

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/personal_Driver_style1.css">

</head>
<body>
<?php
 include 'header.php';
 include 'feedbackHeader_Driver.php'; 
 ?>
<h2>ACCOUNT DETAILS</h2>
 <?php
    $namep='';
    $Passp='';

    if(isset($_COOKIE['name']) && isset($_COOKIE['passward']))
    { 
        
         $namep=$_COOKIE['name'];
         $Passp=$_COOKIE['passward'];
         include 'conn.php';
         $sql="select * from driver1 where dusername='$namep' and dPass='$Passp'";
         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
           <tr>
            <th>Driver Name</th> 
            <th>Daddress</th> 
            <th>demail</th>
            <th>User Name</th> 
            <th>Password</th>
           </tr>";
    
        while($row = $result->fetch_assoc()) {
             echo "<tr > 
             <td>" . $row["dname"]. "</td> 
             <td>" . $row["address"]. "</td>
             <td>" . $row["demail"]. "</td>
             <td>" . $row["dusername"]. "</td>
             <td>" . $row["dPass"]. "</td>
             </tr>";

                    }
             echo "</table>";
        } else {
          echo "0 results";
        }
    }
?>
<a href="UpdateDriver.php">
<input class="input10" type="button" value="Update Account">
</a>
<a href="delete_Driver.php">
<input class="input10" type="button" value="Delete Account">
</a>
  <br>
  
<br>

<br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br>

 

 

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
