<?php
include 'delete_Driver_Admin.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/driver_details_style1.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'header2_new.php';?> 
<br>

<h2>DRIVER DETAILS</h2>
  <br>
<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT dname, address,demail,dusername,dPass FROM driver1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Driver Name</th> <th>Address</th> <th>Email</th>  <th>User Name</th> <th>Password</th></tr>";
    // output data of each row
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

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"  method="post">
<input type="text" name="apname">
<input class="input10" type="submit" value="Delete Account">
</form>

  <br>
  
<br>

<br>
<br><br><br><br><br><br><br><br>

 

 

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
