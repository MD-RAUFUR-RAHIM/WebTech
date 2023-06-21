
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/personal_Patient_style.css">
    </head>
    

    <body>
    <?php include 'header.php';
     include 'headerFeedback.php';
	
	

    
	$namep='';
	$Passp='';
	if(isset($_COOKIE['pname']) && isset($_COOKIE['passward']))
  	{ 
  		
  		 $namep=$_COOKIE['pname'];
  		 $Passp=$_COOKIE['passward'];
  		 include 'conn.php';
         $sql="select * from patient1 where pusername='$namep' and pPass='$Passp'";
         $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
           <tr>
            <th>Patient Name</th> 
            <th>Paddress</th> 
            <th>pemail</th>
            <th>Blood Group</th>
            <th>User Name</th> 
            <th>Password</th>
           </tr>";
    
        while($row = $result->fetch_assoc()) {
       		 echo "<tr > 
      		 <td>" . $row["pname"]. "</td> 
     		 <td>" . $row["paddress"]. "</td>
     		 <td>" . $row["pemail"]. "</td>
			 <td>" . $row["pbloodgrp"]. "</td>
			 <td>" . $row["pusername"]. "</td>
			 <td>" . $row["pPass"]. "</td>
			 </tr>";

    				}
   			 echo "</table>";
		} else {
   		  echo "0 results";
		}
  	}
  	?>
  	<a href="UpdatePatient.php">
  	<input class="input10" type="button" value="Update Account">
	</a>

  	<br><br><br> 	<br><br><br>  <br><br><br> <br><br><br> <br>
    <?php include 'footer.php';?>
    </body>
</html>