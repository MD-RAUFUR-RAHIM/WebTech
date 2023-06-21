<?php



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Booking_history_style2.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'header2_new.php';?> 

<br>

<h2>AMBULANCE BOOKING HISTORY</h2>


<br>
<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT pname, pemail,pambulance_type,plocation,pcity FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
     <th>Patient Name</th> 
     <th>Address</th> 
     <th>Ambulance Type</th> 
     <th>Location</th>
      <th>City</th> 
      </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["pname"]. "</td> 
        <td>" . $row["pemail"]. "</td>
        <td>" . $row["pambulance_type"]. "</td>
        <td>" . $row["plocation"]. "</td>
        <td>" . $row["pcity"]. "</td>
    
        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
<br><br><br><br> <br><br><br>
  
  
 
<?php include 'footer.php';?>
</body>
</html>
