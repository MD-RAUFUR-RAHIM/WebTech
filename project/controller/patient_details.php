<?php
include 'delete_Patient_Admin.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/New.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'header2_new.php';?> 

<br>
<h2>PATIENT DETAILS</h2>
<br>
<?php
include 'conn.php';
$sql = "SELECT pname, paddress,pemail,pbloodgrp,pusername,pPass FROM patient1";
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
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"  method="post">
<input type="text" name="adname">
<input class="input10" type="submit" value="Delete Account">
</form>


<br>
<br><br><br><br><br>
<br>
<br>
<br>
<br>
<br>
<br>

  




<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
